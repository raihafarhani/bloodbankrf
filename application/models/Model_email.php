<?php

class Model_email extends CI_Model
{
    public function __construct()
	{
		$this->load->database();
	}
 function fetch_data()
 {
  $this->db->select("*");
  $this->db->from("donor");
  $this->db->order_by('id', 'desc');
  return $this->db->get();
 }

 function email($id)
 {
  $this->db->where('id', $id);
  $this->db->delete('donor');
 }
}

?>