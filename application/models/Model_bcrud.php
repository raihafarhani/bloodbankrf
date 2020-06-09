<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bcrud extends CI_Model {

	
	public function getBlood($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
		
	
	}

	public function addBlood($table_name, $data)
	{
		$add = $this->db->insert($table_name, $data);
		return $add;
	
	}
//keluarkan data
	public function editBlood($table_name, $id)
	{
		$this->db->where('BloodID', $id);
		
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
//button update
	public function dataEdit($table_name, $data, $id)
	{
		$this->db->where('BloodID', $id);
		$this->db->update('blood', $data);
		$edit = $this->db->update($table_name, $data, $id);
		return $edit;
	}

	public function deleteBlood($table_name, $id)
	{
		$this->db->where('BloodID', $id);
		$delete = $this->db->delete($table_name);
		return $delete;	
	}


}
