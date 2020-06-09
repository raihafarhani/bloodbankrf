<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{
		$this->load->view('register');
		

    }

    public function insert()
	{
        $data = array('FName' => $this->input->post('FName', true),
                      'LName' => $this->input->post('LName', true),
                      'ICNum' => $this->input->post('ICNum', true),
                      'Email' => $this->input->post('Email', true),
                      'ContactNum' => $this->input->post('ContactNum', true),
                      'Address' => $this->input->post('Address', true),
                      'BloodType' => $this->input->post('BloodType', true));
        $insert = $this->Model_register->processInsert('donor', $data);
        if($insert > 0){
            $this->session->set_flashdata('Success', 'Data saved');
            redirect('index.php/Main');
    } 
    else
    { 
        echo "Failed";
    }    

    }
	
	
}
