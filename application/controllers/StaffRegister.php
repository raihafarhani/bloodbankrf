<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffRegister extends CI_Controller {

	
	public function index()
	{
		$this->load->view('staffregister');
		

    }

    public function insert()
	{
        $data = array('StaffName' => $this->input->post('StaffName', true),
                      'StaffPass' => $this->input->post('StaffPass', true),
                      'ContactNum' => $this->input->post('ContactNum', true),
                      'Email' => $this->input->post('Email', true));
        $insert = $this->Model_staffregister->processInsert('staff', $data);
        if($insert > 0){
            $this->session->set_flashdata('Success', 'Data saved');
            redirect('index.php/LoginStaff');
    } 
    else
    { 
        echo "Failed";
    }    

    }
	
	
}
