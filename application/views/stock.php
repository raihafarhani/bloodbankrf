<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" initial-scale="1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<title>Stock</title>
  <!--JQUERY-->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	
	
  <script>
  
      </script>
 </head>
<body>

    <style>
	
    /* Use a media query to add a break point at 800px: */
@media screen and (max-width:800px) {
  .left, .main, .right {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}

.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
		 text-align: center;
}
.button {
  background-color: red; 
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  position: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
}
body{
	background-color: #FFFFFF;
	margin-top: 90px;
	margin-bottom: 30px;
	margin-left: 0px;
	margin-right: 500px;
}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
           

</style>
 
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large w3-red">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="<?php echo site_url('index.php/mstaff') ?>" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="<?php echo site_url('index.php/yearly') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Yearly Stock</a>
    
    <a href="<?php echo site_url('index.php/staff') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
    <a href="<?php echo site_url('index.php/blood') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blood</a>
    <a href="<?php echo site_url('index.php/donor') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donor</a>
    <a href="<?php echo site_url('index.php/donorAA') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">A+</a>
    <a href="<?php echo site_url('index.php/donorA') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">A-</a>
    <a href="<?php echo site_url('index.php/donorAABB') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">AB+</a>
    <a href="<?php echo site_url('index.php/donorAB') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">AB-</a>
    <a href="<?php echo site_url('index.php/donorBB') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">B+</a>
    <a href="<?php echo site_url('index.php/donorB') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">B-</a>
    <a href="<?php echo site_url('index.php/donorOO') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">O+</a>
    <a href="<?php echo site_url('index.php/donorO') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">O-</a>
   
</div> 
</div>
<?php
        if(isset($_POST['button'])) { 
          echo "Email Sent"; 
      } 
         
    ?>  
<form method="post">
        <input type="submit" class="button" name="button" value="Email"/>
        </form> 
        

  <div class="chart-container">
  <canvas id="bar-chartcanvas" width="850%" height="500%" style="position: center"></canvas>
  </div>
  
  <script>
    $(document).ready(function () {
 showTotalGraph();
});

function showTotalGraph(){
	   // This is the database.php file we created earlier, its JSON output will be processed in this function
     $.post("Stock/data",
    function (data){
       var jsonData = JSON.parse(data);
       // alert(jsonData[0].BloodType);
        // Declare the variables for your graph (for X and Y Axis) 
        var BloodTypeVar = []; // X Axis Label
        var total = []; // Value and Y Axis basis

        for (var i = 0; i < Object.keys(jsonData).length; i++) {
            // formStatus is taken from JSON output (see above)
            BloodTypeVar.push(jsonData[i].BloodType);
            total.push(jsonData[i].total);
        }

       var options={
        title:{
          display:true,
          text:'Blood Stock',
          fontSize:18
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0}
        },
        legend:{
          display:true,
          position:'bottom',
          labels:{
            fontColor:'#000'
          }
          
        },
        scales: {
        yAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Number of bags'
          },
          ticks: {
                beginAtZero: true
            }
        }],
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Blood Type'
          }
        }]
      }     
      };
     
  var chartColors = {
    red: 'rgb(252, 4, 11)',
    green: 'rgb(13, 170, 11)',
    yellow: 'rgb(252, 254, 11)'
}

var chartdata = {
 labels:BloodTypeVar,
    datasets: [{
      label: 'Critical',
      backgroundColor: [chartColors.red],
      borderWidth:1,
      borderColor:'#777',
      hoverBorderWidth:3,
      data: total
    }]
  };
      
  var graphTarget = $("#bar-chartcanvas"); 
        var barGraph = new Chart(graphTarget, {
            type: 'bar',
            data: chartdata,
            options: options
  });
  var colorChangeValue = 4; //set this to whatever is the deciding color change value
  var dataset = barGraph.data.datasets[0];
  for (var i = 0; i < dataset.data.length; i++) {
    if (dataset.data[i] < colorChangeValue) {
      dataset.backgroundColor[i] = chartColors.red;
      <?php
        //the subject
        $sub = "Hospital Jasin's Blood Bank";
        //the message
        $msg = "Dear Mr/Mrs, 
        Our blood bank is in very short supply. Therefore, please come to your nearest hospital to make donation.
        Thank you very much.";
        //recipient email here
        $rec = "raihafarhani98@gmail.com";
        //send email
        mail($rec,$sub,$msg);
        ?>
    }
    else if ((dataset.data[i] >=4) && (dataset.data[i] < 5)){
      dataset.backgroundColor[i] = chartColors.yellow;
      
    }
    else{
    dataset.backgroundColor[i] = chartColors.green;
    }
}
barGraph.update();
    });
}




      
  </script>
 
</body>

 