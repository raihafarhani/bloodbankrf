<?php

class Model_stock extends CI_Model
{
    public function __construct()
	{
		$this->load->database();
	}
 
	public function graph(){
	//header('Content-Type: application/json');
    //declare variables for db connection
    $servername = "us-cdbr-east-02.cleardb.com";
    $username = "b8ea5e0a16ab9f";
    $password = "dac23453";
    $dbname = "heroku_76d614326cca8b2";
    //db connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //error handling
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
      $sql = "SELECT BloodType
      FROM `blood`
      WHERE DateOut='0000-00-00' AND MONTH(DateIn) ='4'
      GROUP BY BloodType
      HAVING COUNT(*) <4";

    //run sql query and store into variable
    $result = mysqli_query($conn,$sql);
    $data = array();
   

    foreach ($result as $row) {
    $data[] = $row;
    
    }
    //echo '$data';
    //free memory and close db connection
    $result->close();
    $conn->close();
    // IMPORTANT, output to json
    //echo json_encode($data);    
    //return json_encode($data);
    $message = json_encode($data);
    echo "<script type='text/javascript'>alert('$message');</script>";
    
}
 
}
?>