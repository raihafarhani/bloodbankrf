<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginDonor extends CI_Controller {

	
	public function index()
	{
		$this->load->view('logindonor');
	
    }
    
    public function checklogin()
	{
        if(isset($_POST['login'])){
            $donor = $this->input->post('FName', true);
            $pass = $this->input->post('DonorPass', true);
            $check = $this->Model_logindonor->processLogin($donor, $pass);
            $hasil = @count($check);
            if($hasil > 0){
               $select = $this->db->get_where('donor', array('FName' => $donor, 'DonorPass' => $pass))->row();
               $data = array('logged_in' => true, 
                              'loger' => $select->FName);
               $this->session->set_userdata($data);
                redirect('index.php/main');
                } else {
                $this->session->set_flashdata('error', 'Wrong id or password');
                redirect('index.php/logindonor');
            }

        }
   
        
        
    }
}

    

	

