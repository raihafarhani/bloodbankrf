<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {

	
	public function processInsert($table_name, $data)
	{
       $insert =  $this->db->insert($table_name, $data);
       return $insert;
    }
    
    
}
