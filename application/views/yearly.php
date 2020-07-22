<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" initial-scale="1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<title>2019 Stock</title>
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
  padding: 10px 20px;
  text-align: center;
  position: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  position:relative; left:100px; top:2px;
}
body{
	background-color: #FFFFFF;
	margin-top: 90px;
	margin-bottom: 30px;
	margin-left: 0px;
	margin-right: 500px;
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
.right {
   position: absolute;
   right: 10px;
   
            }
</style>
 
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large w3-red">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-button w3-padding-large w3-white">Admin</a>
   <a href="<?php echo site_url('index.php') ?>" class="w3-bar-item w3-button w3-padding-large right w3-hover-white">Logout</a>
   <a href="<?php echo site_url('index.php/staff') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
   <a href="<?php echo site_url('index.php/blood') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blood</a>
   <a href="<?php echo site_url('index.php/donor') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donor</a>
    <div class="w3-dropdown-hover">
    <button class=" w3-button w3-hide-small w3-padding-large w3-hover-white">Stock</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="<?php echo site_url('index.php/yearly') ?>" class="w3-bar-item w3-button">Yearly</a>
        <button class="w3-button">Month</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="<?php echo site_url('index.php/stock') ?>" class="w3-bar-item w3-button">April</a>
        <a href="#" class="w3-bar-item w3-button">May</a>
        <a href="#" class="w3-bar-item w3-button">June</a>
        <a href="<?php echo site_url('index.php/stock7') ?>" class="w3-bar-item w3-button">July</a>
        </div>
      </div>
    </div>
    
</div>
</div> 
</div>
  <div class="chart-container">
  <canvas id="bar-chartcanvas" width="850%" height="500%" style="position: center"></canvas>

 </div>
  
  <script>
    $(document).ready(function () {
    showTotalGraph();
    });

    function showTotalGraph(){
	   // This is the database.php file we created earlier, its JSON output will be processed in this function
     $.post("Yearly/data",
    function (data){
       var jsonData = JSON.parse(data);
       // alert(jsonData[0].BloodType);
        // Declare the variables for your graph (for X and Y Axis) 
        var monthsVar = []; // X Axis Label
        var total = []; // Value and Y Axis basis

        for (var i = 0; i < Object.keys(jsonData).length; i++) {
            // formStatus is taken from JSON output (see above)
            monthsVar.push(jsonData[i].months);
            total.push(jsonData[i].total);
        }

       var options={
        title:{
          display:true,
          text:'2019',
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
          position:'right',
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
            labelString: 'Month'
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
 labels:monthsVar,
    datasets: [{
      label: 'Stock',
      backgroundColor: [chartColors.green, chartColors.green, chartColors.green, chartColors.green, chartColors.green],
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
  
barGraph.update();
    });

    
}
</script>

 
</body>

 