<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_crud extends CI_Model {

	
	public function getUser($table_name)
	{
		
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
		
	
	}

	public function addUser($table_name, $data)
	{
		$add = $this->db->insert($table_name, $data);
		return $add;
	
	}
//keluarkan data
	public function editUser($table_name, $id)
	{
		$this->db->where('StaffID', $id);
		
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
//button update
	public function dataEdit($table_name, $data, $id)
	{
		$this->db->where('StaffID', $id);
		$this->db->update('staff', $data);
		$edit = $this->db->update($table_name, $data, $id);
		return $edit;
	}

	public function deleteUser($table_name, $id)
	{
		$this->db->where('StaffID', $id);
		$delete = $this->db->delete($table_name);
		return $delete;	
	}


}
