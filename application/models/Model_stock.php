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
        $username = "b5049045c0848c";
        $password = "778bbdb0";
        $dbname = "heroku_6550b13bdf95973";
    //db connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //error handling
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
      $sql = "SELECT BloodType
      FROM `blood`
      WHERE MONTH(DateIn) ='4'
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