<?php

class Model_stock extends CI_Model
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
    
    public function total()
    {
        $data = $this->db->query("SELECT BloodType, COUNT(BloodID) as total FROM blood GROUP BY BloodType ORDER BY BloodType");
		return $data->result();
    }
}
?>