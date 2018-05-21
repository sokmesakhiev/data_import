<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

	public function process($file_name)
	{
		$this->restoreDatabaseTables($file_name);
        $this->pushing_data();
	}

	public function restoreDatabaseTables($file_name){
        $restore_file  = $this->config->item("file_upload_url") . $file_name;
        $server_name   = $this->db->hostname;
        $username      = $this->db->username;
        $password      = $this->db->password;
        $database_name = $this->db->database;

        $this->reset_database();
        $cmd = "mysql -h {$server_name} -u {$username} -p {$password} {$database_name} < $restore_file";
        exec($cmd);
	}

    public function pushing_data(){
        $this->config->load("table");
        $table = $this->config->item("tables");
        $errors = array()
        foreach ($tables as $key => $table)
        {
            if($this->validate_table($key, $table)){

            }
            $this->move_data($key);
        }
        
    }

    public function validate_table($table_name, $table_properties){
        $error = array()
        $this->load->database()
    }

    public function move_data($table_name){
        $this->load->database();
        $sql="Select * from $table_name";
        $result=$this->db->query($sql);
        $rows=$result->result_array();
        $j = 0;
        while($j<(count($rows)))
        {
            $this->validate_record($table_name,$rows[$j]);
            $j = $j + 1;
        }
        
        //Once you archive, delete the record from original table
        // $sql = "Delete from tblpersonal where id=".$id;
        // mysql_query($sql);
    }

    public function validate_record($table_name, $row, $error){
        $tables = $this->config->load("table");
        foreach ($tables[$table_name] as $field){
            foreach ($row as $key => $value){
                unless validate_mandatory($field["mandatory"], $value){
                    
                }
                unless validate_digit($field["min_digit"],$field["max_degit"],$value){

                }
                unless validate_time( $field){

                }
            }
        }
    }

    public function validate_time($condition, $value){
        if (trim($condition) != "")
            return true
        else
            return true
    }

    public function validate_digit($min_digit, $max_degit, $value){
        if(strlen($value) < $min_digit && strlen($value) > $max_degit )
            return false;
        else
            return true;
    }

    public function validate_mandatory($mandatory, $value){
        if($mandatory == true && ($value == NULL || trim($value) == ""))
            return false;
        else
            return true;
    }

    public function archive_record($archived_tablename,$row){
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
        $table = $this->config->item("tables");
        foreach ($tables as $key => $table)
        {
            $this->db->query("delete from $key");
        }

    }
}
