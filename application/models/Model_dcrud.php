<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dcrud extends CI_Model {

	
	public function getDonor($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
		
	
	}

	public function addDonor($table_name, $data)
	{
		$add = $this->db->insert($table_name, $data);
		return $add;
	
	}
//keluarkan data
	public function editDonor($table_name, $id)
	{
		$this->db->where('DonorID', $id);
		
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
//button update
	public function dataEdit($table_name, $data, $id)
	{
		$this->db->where('DonorID', $id);
		$this->db->update('donor', $data);
		$edit = $this->db->update($table_name, $data, $id);
		return $edit;
	}

	public function deleteDonor($table_name, $id)
	{
		$this->db->where('DonorID', $id);
		$delete = $this->db->delete($table_name);
		return $delete;	
	}


}
