<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStaff extends CI_Controller {

	
	public function index()
	{
		$this->load->view('mstaff');
		

	}public function staffpage()
	{
		$this->load->view('mstaff');
		
	}
}