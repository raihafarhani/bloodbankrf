<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//load chart_model from model
		$this->load->model('Model_stock');
	}
	
	function index()
	{
		$data['graph'] = $this->Model_stock->graph();
		$this->load->view('stock');
	}

  public function email() 
	{
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud";

    //db connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $blood_type_arr = [];
    //error handling
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

    $sql_blood = "SELECT COUNT(*) as 'Total', BloodType
    FROM `blood`
    WHERE MONTH(DateIn) ='4'
    GROUP BY BloodType
    HAVING COUNT(*) < 4";
    
    $blood_result = mysqli_query($conn,$sql_blood);

    foreach($blood_result as $blood_row){
      //$type = $blood_row['BloodType'];

      array_push($blood_type_arr,$blood_row['BloodType']);
    }

    foreach($blood_type_arr as $type){
      $sql = "SELECT Email FROM donor WHERE BloodType = '$type'";
      //run sql query and store into variable
      $result = mysqli_query($conn, $sql);

      foreach($result as $row){
        $test = $row['Email'];
        // $data[] = $row;
        
        //the subject
        $sub = "Hospital Jasin's Blood Bank";
        //the message
        $msg = "Dear Mr/Mrs, 
        Our blood bank is in very short supply. Therefore, please come to your nearest hospital to make donation.
        Thank you very much.";
        //recipient email here
        $rec = $row['Email'];
        //send email
        mail($rec,$sub,$msg);
        
      }

    }

    $blood_result->close();
    $result->close();
    $conn->close();

    
    echo 'Email sent';
  }
  
	public function data(){
       //header('Content-Type: application/json');
        //declare variables for db connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud";

        //db connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //error handling
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT COUNT(*) as total, BloodType
                FROM `blood`
                WHERE MONTH(DateIn) ='4'
                GROUP BY BloodType
                ORDER BY BloodType";

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
        echo json_encode($data);    
        //return json_encode($data);
  }
  
  
	
	
}

