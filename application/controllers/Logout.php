<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
		

	}

	public function logout()
	{
		$this->load->session->sess_destroy();
		redirect('welcome');
	
	}

	
}
