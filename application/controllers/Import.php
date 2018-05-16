<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

	public function process($file_name)
	{
		// $this->restoreDatabaseTables($file_name);
        $this->pushing_data();
	}

	public function restoreDatabaseTables($file_name){
        $restore_file  = $this->config->item("file_upload_url") . $file_name;
        $server_name   = $this->db->hostname;
        $username      = $this->db->username;
        $password      = $this->db->password;
        $database_name = $this->db->database;

        $this->db->query("Drop database {$database_name}");
        $this->db->query("Create database {$database_name}");

        $cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $restore_file";
        exec($cmd);
	}

    public function pushing_data(){
        $this->move_data("tblpersonal");
    }

    public function move_data($table_name){
        $this->load->database();
        $sql="Select * from $table_name";
        $result=$this->db->query($sql);
        $rows=$result->result_array();
        $j = 0;
        while($j<(count($rows)))
        {
            $this->archive_record($table_name,$rows[$j]);
            $j = $j + 1;
        }
        
        //Once you archive, delete the record from original table
        // $sql = "Delete from tblpersonal where id=".$id;
        // mysql_query($sql);
    }

    public function archive_record($archived_tablename,$row){
        $sql = "insert into $archived_tablename values(";
        $array_value = array();
        foreach ($row as $key => $value)
        {
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
}
