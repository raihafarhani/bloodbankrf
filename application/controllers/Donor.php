<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donor extends CI_Controller {

	
	public function index()
	{
			
		$this->data['result'] = $this->Model_dcrud->getDonor('donor');
		$this->load->view('donor', $this->data);

	}

	public function form_input()
	{
		
		$this->data['result'] = $this->Model_dcrud->getDonor('donor');
		$this->load->view('donor');

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
			redirect('index.php/donor');}
		else
		   { echo 'Not Successfull';}

		}

	public function delete($id){
		$delete = $this->Model_dcrud->deleteDonor('donor', $id);
		if($delete > 0){
			redirect('index.php/donor');}
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
        $data = array('FName' => $FName, 'LName' => $LName, 'DonorPass' => $DonorPass, 'ICNum' => $ICNum, 'ContactNum' => $ContactNum, 
                      'Email' => $Email, 'Address' => $Address, 'BloodType' => $BloodType);
		$edit = $this->Model_dcrud->dataEdit('donor', $data, $id);
        if($edit > 0){
			redirect('index.php/donor');}
		else
		   { echo 'Not Successfull';}

		}

	public function send($value='')
	{
		$this->load->library('email');
		$config = array(
			'mailtype'=>"html",
		);
		$this->email->initialize($config);
		$this->email->from('bloodbankrf@gmail.com', 'Blood Bank');
		$this->email->to('raihafarhani98@gmail.com');
		$this->email->subject('Blood Bank send email');
		$this->email->message(str_replace("{contents}", 
		$this->email_text(),
		$this->email_template()));

		if ($this->email->send())
		{
			echo "Email has been sent.";
		}else{
			echo $this->email->print_debugger();
		}}

		public function email_text()
		{
			return '<h1>Please come to the nearest blood bank to donate.</h1>';
		}
	}
	

	

	

