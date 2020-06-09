<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_loginstaff extends CI_Model {

	
	public function processLogin($staff, $pass)
	{
        $this->db->where('StaffName', $staff);
        $this->db->where('StaffPass', $pass);
        return $this->db->get('staff')->row();
	
    }
    
    
}
