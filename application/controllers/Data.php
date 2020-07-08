<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//load chart_model from model
		$this->load->model('Model_data');
    }

    function index()
	{
		
		$this->load->view('data');
	}
}
?>