<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//load chart_model from model
		$this->load->model('Model_stock');
	}
	
	function index()
	{
		$data['graph'] = $this->Model_stock->graph();
		$this->load->view('stock', $data);
	}

}

