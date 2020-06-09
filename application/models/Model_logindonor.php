<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_logindonor extends CI_Model {

	
	public function processLogin($donor, $pass)
	{
        $this->db->where('FName', $donor);
        $this->db->where('DonorPass', $pass);
        return $this->db->get('donor')->row();
	
    }
    
    
}
