<?php

class Model_stock extends CI_Model
{
    public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
        //header('Content-Type: application/json');
        //declare variables for db connection
        $servername = "us-cdbr-east-02.cleardb.com";
        $username = "b3929acefa1880";
        $password = "9cb4f060";
        $dbname = "heroku_df17e234ec02982";

        //db connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //error handling
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
		$sql = "SELECT BloodType, COUNT(BloodType) AS total 
        FROM blood WHERE MONTH(DateIn) = '4' GROUP BY BloodType ORDER BY BloodType;";
    
        //run sql query and store into variable
        $result = mysqli_query($conn,$sql);
        $data = array();

        foreach ($result as $row) {
        $data[] = $row;
        }

        //free memory and close db connection
        $result->close();
        $conn->close();
        // IMPORTANT, output to json
        //echo json_encode($data);    
        return json_encode($data);
    }
    
	public function emailUser($data)
	{
		//header('Content-Type: application/json');
        //declare variables for db connection
        $servername = "us-cdbr-east-02.cleardb.com";
        $username = "b3929acefa1880";
        $password = "9cb4f060";
        $dbname = "heroku_df17e234ec02982";

        //db connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //error handling
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
		$sql = "SELECT Email FROM donor WHERE BloodType = 'A+';";

        //run sql query and store into variable
        $result = mysqli_query($conn,$sql);
        $data = array();

        foreach ($result as $row) {
        $data[] = $row;
        }

        //free memory and close db connection
        $result->close();
        $conn->close();
        // IMPORTANT, output to json
        //echo json_encode($data);    
        return json_encode($data);
	
	}

	 
	
}
?>