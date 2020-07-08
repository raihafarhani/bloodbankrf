<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yearly extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//load chart_model from model
		$this->load->model('Model_yearly');
	}
	
	function index()
	{
		$data['graph'] = $this->Model_yearly->graph();
		$this->load->view('yearly', $data);
	}

}

