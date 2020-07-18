<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffdonor extends CI_Controller {

	
	public function index()
	{
			
		$this->data['result'] = $this->Model_dcrud->getDonor('donor');
		$this->load->view('staffdonor', $this->data);

	}

	public function form_input()
	{
		
		$this->data['result'] = $this->Model_dcrud->getDonor('donor');
		$this->load->view('staffdonor');

	}

	public function insert() 
	{
		$DonorID = $_POST['DonorID'];
        $FName = $_POST['FName'];
		$LName = $_POST['LName'];
		$DonorPass = $_POST['DonorPass'];
        $ICNum = $_POST['ICNum'];
        $Email = $_POST['Email'];
        $ContactNum = $_POST['ContactNum'];
        $Address = $_POST['Address'];
		$BloodType = $_POST['BloodType'];
        $data = array('DonorID' => $DonorID, 'FName' => $FName, 'LName' => $LName, 'DonorPass' => $DonorPass, 'ICNum' => $ICNum,
                      'Email' => $Email, 'ContactNum' => $ContactNum,
                      'Address' => $Address, 'BloodType' => $BloodType);
		$add = $this->Model_dcrud->addDonor('donor', $data);
        if($add > 0){
			redirect('index.php/staffdonor');}
		else
		   { echo 'Not Successfull';}

		}

	public function delete($id){
		$delete = $this->Model_dcrud->deleteDonor('donor', $id);
		if($delete > 0){
			redirect('index.php/staffdonor');}
		else
		   { echo 'Not Successfull';}

	}
	public function form_edit($id)
	{
		
		$this->data['editDonor'] = $this->Model_dcrud->editDonor('donor', $id);
		$this->load->view('dform-edit', $this->data);

	}

	public function update($id) 
	{
		$DonorID = $_POST['DonorID'];
		$FName = $_POST['FName'];
		$LName = $_POST['LName'];
		$DonorPass = $_POST['DonorPass'];
        $ICNum = $_POST['ICNum'];
        $Email = $_POST['Email'];
		$ContactNum = $_POST['ContactNum'];
        $Address = $_POST['Address'];
        $BloodType = $_POST['BloodType'];
        $data = array('DonorID' => $DonorID, 'FName' => $FName, 'LName' => $LName, 'DonorPass' => $DonorPass, 'ICNum' => $ICNum, 'ContactNum' => $ContactNum, 
                      'Email' => $Email, 'Address' => $Address, 'BloodType' => $BloodType);
		$edit = $this->Model_dcrud->dataEdit('donor', $data, $id);
        if($edit > 0){
			redirect('index.php/staffdonor');}
		else
		   { echo 'Not Successfull';}

		}

	
	}
	

	

	

