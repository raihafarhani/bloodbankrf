<?php

class Model_yearly extends CI_Model
{
    public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from blood");
		return $data->result();
    }
    
    public function bloodAA()
    {
        $this->db->where("BloodType = 'A+'");
		$query = $this->db->get('blood');
		echo $query->num_rows();
    }
}
?>