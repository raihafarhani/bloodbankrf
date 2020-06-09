<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_chart extends CI_Model {

	
	function construct($table_name, $data)
	{
      parent:: Constuct();
      $this->db = $this->load->database('default', TRUE, TRUE);
    }

    function getdata(){
        $this->db->select('*');
        $query = $this->db->get('blood');
        return $query->result_array();
    }


    
    
}