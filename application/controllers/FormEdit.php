<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormEdit extends CI_Controller {

	
	public function index()
	{
		$this->load->view('form-edit');
		

	}

	public function input()
	{
		$this->load->view('form-edit');

	}
}