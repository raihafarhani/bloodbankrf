<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonorB extends CI_Controller {

	
	public function index()
	{
		$this->db->where('BloodType', "B-");
		$donor=$this->db->get("donor");
		$data=array();
		$data['result'] = $donor->result_array();
		//$data['result'] = $this->Model_donorB->getDonor($id);
		$this->load->view('donorB', $data);

	}

	public function form_input()
	{
		
		$this->data['result'] = $this->Model_donorB->getDonor('donor');
		$this->load->view('dform-input');

	}

	public function insert() 
	{
		//$StaffID = $_POST['StaffID'];
        $FName = $_POST['FName'];
		$LName = $_POST['LName'];
		$DonorPass = $_POST['DonorPass'];
        $ICNum = $_POST['ICNum'];
        $Email = $_POST['Email'];
        $ContactNum = $_POST['ContactNum'];
        $Address = $_POST['Address'];
		$BloodType = $_POST['BloodType'];
        $data = array('FName' => $FName, 'LName' => $LName, 'DonorPass' => $DonorPass, 'ICNum' => $ICNum,
                      'Email' => $Email, 'ContactNum' => $ContactNum,
                      'Address' => $Address, 'BloodType' => $BloodType);
		$add = $this->Model_donorB->addDonor('donor', $data);
        if($add > 0){
			redirect('index.php/donorB');}
		else
		   { echo 'Not Successfull';}

		}

	public function delete($id){
		$delete = $this->Model_donorB->deleteDonor('donor', $id);
		if($delete > 0){
			redirect('index.php/donorB');}
		else
		   { echo 'Not Successfull';}

	}
	public function form_edit($id)
	{
		
		$this->data['editDonor'] = $this->Model_donor->editDonor('donor', $id);
		$this->load->view('dform-edit', $this->data);

	}

	public function update($id) 
	{
		//$StaffID = $_POST['StaffID'];
		$FName = $_POST['FName'];
		$LName = $_POST['LName'];
		$DonorPass = $_POST['DonorPass'];
        $ICNum = $_POST['ICNum'];
        $Email = $_POST['Email'];
		$ContactNum = $_POST['ContactNum'];
        $Address = $_POST['Address'];
        $BloodType = $_POST['BloodType'];
        $data = array('FName' => $FName, 'LName' => $LName, 'DonorPass' => $DonorPass, 'ICNum' => $ICNum, 'ContactNum' => $ContactNum, 
                      'Email' => $Email, 'Address' => $Address, 'BloodType' => $BloodType);
		$edit = $this->Model_donorB->dataEdit('donor', $data, $id);
        if($edit > 0){
			redirect('index.php/donorB');}
		else
		   { echo 'Not Successfull';}

		}



	
	
}

	
	

