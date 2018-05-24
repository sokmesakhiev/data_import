<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

	public function process($file_name)
	{
		$this->restoreDatabaseTables($file_name);
        $this->preparing_data();
	}

	public function restoreDatabaseTables($file_name){
        $this->load->database();
        $restore_file  = $this->config->item("file_upload_url") . $file_name;
        $server_name   = $this->db->hostname;
        $username      = $this->db->username;
        $password      = $this->db->password;
        $database_name = $this->db->database;

        $this->reset_database();
        $cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $restore_file";
        exec($cmd);
	}

    public function preparing_data(){
        $this->config->load("table");
        $tables = $this->config->item("tables");
        $error = array();
        $dsn1 = 'mysqli://sokmesa:admin@localhost/acm';
        $this->db1 = $this->load->database($dsn1, true);
        foreach ($tables as $table_name => $table_properties)
        {
            $error = $this->validate_table($table_name, $table_properties, $error);
        }
        $data = json_encode($error);
        echo $data;
    }

    public function import_data(){
        $excludes = $_POST("excludes");
        $tables = $this->config->item("tables");
        foreach ($tables as $table_name => $table_properties){
            $this->move_data($this->db1, $table_name, $error, $excludes);
        }  
    }

    public function validate_table($table_name, $table_properties, $error){
        $this->load->database();
        $sql="Select * from $table_name";
        $result=$this->db->query($sql);
        $rows=$result->result_array();
        foreach ($rows as $row) {
            $error = $this->validate_record($table_name, $table_properties,$row,$error);
        } 
        return $error;
    }

    public function move_data($db, $table_name, $error, $excludes){
        $sql="Select * from $table_name";
        $result=$this->db->query($sql);
        $rows=$result->result_array();
        foreach ($rows as $row) {
            if(isset($row["CaseID"]) and in_array($row["CaseID"], $excludes)){
                continue;
            }
            $sql = $this->build_sql_insert($table_name, $row);
            // echo($sql);
            $db->query($sql);
        }
    }

    public function validate_record($table_name, $table_properties, $row, $error){
        if(isset($row["CaseID"])){
            if(!isset($error[$row["CaseID"]])){
                $error[$row["CaseID"]] = array();
            }
        }
        foreach ($table_properties as $field){
            foreach ($row as $key => $value){
                $key_name = $table_name."-".$key;
                
                if($this->validate_mandatory($field["mandatory"], $value) == false){
                    // echo("Validating mandatory failed field $key with value $value in table $table_name ". "<br />");
                    $error[$row["CaseID"]][$key_name] = "Field $key in table $table_name is missing value.";
                }

                if(isset($field["min_digit"]) && isset($field["max_degit"]) && $this->validate_digit($field["min_digit"],$field["max_degit"],$value) == false){
                    $error[$row["CaseID"]][$key_name] = "The number of digit field ".$key." in table $table_name is not in the range from". $field['min_digit'] ." to ".$field['max_degit']." degit.";
                }
                if($field["condition"] != "" && isset($row["CaseID"]) && !$this->validate_time($row["CaseID"], $field["condition"], $value) == false){
                    $ref_table_name = $field["condition"]["table"];
                    $ref_field_name = $field["condition"]["field"];
                    $operator = $field["condition"]["operator"];
                    $error[$row["CaseID"]][$key_name] = $table_name ." with field ".$key." with value ".$value." should be ".$operator." to the field ".$ref_field_name." of table ".$ref_table_name." .";
                }
            }
        }

        if(isset($row["CaseID"]) && count($error[$row["CaseID"]]) == 0){
            unset($error[$row["CaseID"]]);
        }
        return $error;
    }

    public function validate_time($CaseID, $condition, $value){
        $this->load->db();
        if (trim($condition) != ""){
            $table_name = $condition["table"];
            $field_name = $condition["field"];
            $operator = $condition["operator"];
            $result = $this->db->query("select * from $table_name where CaseID = $CaseID");
            $rows=$result->result_array();
            foreach($rows as $row)
            {
                switch ($operator) {
                    case '<':
                        return $value < $row[$field_name];
                        break;
                    case '<=':
                        return $value <= $row[$field_name];
                        break;
                    case '>':
                        return $value > $row[$field_name];
                        break;
                    case '>=':
                        return $value >= $row[$field_name];
                        break;
                    case '=':
                        return $value == $row[$field_name];
                        break;
                    default:
                        return true;
                        break;
                }
            }
        }
        else{
            return true;
        }
    }

    public function validate_digit($min_digit, $max_degit, $value){
        if(strlen($value) < $min_digit && strlen($value) > $max_degit )
            return true;
        else
            return false;
    }

    public function validate_mandatory($mandatory, $value){
        if($mandatory == true && ($value == NULL || trim($value) == ""))
            return false;
        else
            return true;
    }

    public function build_sql_insert($archived_tablename,$row){
        $sql = "insert into $archived_tablename values(";
        $array_value = array();
        foreach ($row as $key => $value){
            array_push($array_value, "'".$row[$key]."'");
        }
        $sql.= join(",", $array_value);
        $sql.=")";
        return $sql;
    }

    public function httpPost($url, $data){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function reset_database(){
        $this->load->database();
        $this->config->load("table");
        $tables = $this->config->item("tables");
        foreach ($tables as $key => $table)
        {
            $this->db->query("delete from $key");
        }

    }
    public function upload_info(){
        $this->load->database();
        $this->config->load("table");
        $tables = $this->config->item("tables");
        $number_table = count($tables);
        $table_record = array();
        $total = 0;
        foreach ($tables as $key => $table)
        {
            $count = $this->db->query("select count(*) as total from $key");
            $table_record[$key] = $count->result_array();
            $total = $total +  $table_record[$key][0]["total"];
        }
        $table_record["total"] = $total;
        echo json_encode($table_record);
    }
}
