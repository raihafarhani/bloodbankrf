<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginStaff extends CI_Controller {

	
	public function index()
	{
		$this->load->view('loginstaff');
	
    }
    
    public function checklogin()
	{
        if(isset($_POST['login'])){
            $staff = $this->input->post('StaffName', true);
            $pass = $this->input->post('StaffPass', true);
            $check = $this->Model_loginstaff->processLogin($staff, $pass);
            $hasil = @count($check);
            if($hasil > 0){
               $select = $this->db->get_where('staff', array('StaffName' => $staff, 'StaffPass' => $pass))->row();
               $data = array('logged_in' => true, 
                              'loger' => $select->StaffName);
               $this->session->set_userdata($data);
               if($select->StaffName == 'admin'){
                redirect('index.php/stock');
               }
               else {
                redirect('StaffStock/index');
               }
            } 
                      
        }
        
    }

    public function admin(){
        $this->load->view('admin');
    }

    public function mstaff(){
        $this->load->view('mstaff');
    }
}