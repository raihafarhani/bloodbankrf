<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	
	public function index()
	{
		
		$this->data['result'] = $this->Model_crud->getUser('staff');
		$this->load->view('staff', $this->data);

	}

	public function form_input()
	{
		
		$this->data['result'] = $this->Model_crud->getUser('staff');
		$this->load->view('staff');

	}

	public function insert() 
	{
		//$StaffID = $_POST['StaffID'];
		$StaffName = $_POST['StaffName'];
		$StaffPass = $_POST['StaffPass'];
		$ContactNum = $_POST['ContactNum'];
		$Email = $_POST['Email'];
		$data = array('StaffName' => $StaffName, 'StaffPass' => $StaffPass, 'ContactNum' => $ContactNum, 'Email' => $Email  );
		$add = $this->Model_crud->addUser('staff', $data);
        if($add > 0){
			redirect('index.php/staff');}
		else
		   { echo 'Not Successfull';}

		}

	public function delete($id){
		$delete = $this->Model_crud->deleteUser('staff', $id);
		if($delete > 0){
			redirect('index.php/staff');}
		else
		   { echo 'Not Successfull';}

	}
	public function form_edit($id)
	{
		
		$this->data['editUser'] = $this->Model_crud->editUser('staff', $id);
		$this->load->view('form-edit', $this->data);

	}

	public function update($id) 
	{
		$StaffID = $_POST['StaffID'];
		$StaffName = $_POST['StaffName'];
		$StaffPass = $_POST['StaffPass'];
		$ContactNum = $_POST['ContactNum'];
		$Email = $_POST['Email'];
		$data = array('StaffName' => $StaffName, 'StaffPass' => $StaffPass, 'ContactNum' => $ContactNum, 'Email' => $Email  );
		$edit = $this->Model_crud->dataEdit('staff', $data, $id);
        if($edit > 0){
			redirect('index.php/staff');}
		else
		   { echo 'Not Successfull';}

		}
	}

	

	

