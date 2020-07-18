<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffblood extends CI_Controller {

	
	public function index()
	{
			
		$this->data['result'] = $this->Model_bcrud->getBlood('blood');
		$this->load->view('staffblood', $this->data);

	}

	public function form_input()
	{
		
		$this->data['result'] = $this->Model_bcrud->getBlood('blood');
		$this->load->view('staffblood');

	}

	public function insert() 
	{
		
		$DonorID = $_POST['DonorID'];
		$BloodType = $_POST['BloodType'];
		$DateIn = $_POST['DateIn'];
		$ExpiryDate = $_POST['ExpiryDate'];
		$DateOut = $_POST['DateOut'];
		$data = array('DonorID' => $DonorID,'BloodType' => $BloodType,  'DateIn' => $DateIn, 'ExpiryDate' => $ExpiryDate, 'DateOut' => $DateOut  );
		$add = $this->Model_bcrud->addBlood('blood', $data);
        if($add > 0){
			redirect('index.php/staffblood');}
		else
		   { echo 'Not Successfull';}

		}

	public function delete($id)
	{
		$delete = $this->Model_bcrud->deleteBlood('blood', $id);
		if($delete > 0){
			redirect('index.php/staffblood');}
		else
		   { echo 'Not Successfull';}

	}
	public function form_edit($id)
	{
		
		$this->data['editBlood'] = $this->Model_bcrud->editBlood('blood', $id);
		$this->load->view('bform-edit', $this->data);

	}

	public function update($id) 
	{
		
		$DonorID = $_POST['DonorID'];
		$BloodType = $_POST['BloodType'];
		$DateIn = $_POST['DateIn'];
		$ExpiryDate = $_POST['ExpiryDate'];
		$DateOut = $_POST['DateOut'];
		$data = array('DonorID' => $DonorID,'BloodType' => $BloodType, 'DateIn' => $DateIn, 'ExpiryDate' => $ExpiryDate, 'DateOut' => $DateOut);
		$edit = $this->Model_bcrud->dataEdit('blood', $data, $id);
        if($edit > 0){
			redirect('index.php/staffblood');}
		else
		   { echo 'Not Successfull';}

		}
	}

	

	

