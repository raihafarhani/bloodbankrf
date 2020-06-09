<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <title>Stock</title>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

  <!--JQUERY-->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<!-- Los iconos tipo Solid de Fontawesome-->
	<link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="static/css/user-form.css"
		th:href="@{/css/user-form.css}">
	<!-- DATA TABLE -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>
   


	</script>
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
  $connection = mysqli_connect("localhost", "root", "", "crud");
  $BloodType = mysqli_query($connection, "SELECT BloodType FROM blood");
  $total = mysqli_query($connection, "SELECT * , COUNT(BloodID) as total FROM blood");
?>
  <div class="container">
  <canvas id="myChart" width="400" height="200" style="position: center"></canvas>
  </div>
  
  <script>
  let myChart = document.getElementById('myChart').getContext('2d');
 
 // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let barChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'],
      datasets:[{
        label:'Stock',
          data:[
            <?php if (count($graph)>0) {
                foreach ($graph as $data) {
                  echo $data->BloodID . ", ";
                }
              }
           ?>],
          
          backgroundColor:['red','red','blue','blue','blue','blue','blue','blue'],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
          
        }]

        //color: function(context) {
    //var index = context.dataIndex;
    //var value = context.dataset.data[index];
    //return value < 0 ? 'red' :  // draw negative values in red
        //index % 2 ? 'blue' :    // else, alternate values in blue and green
        //'green';}
      },
      options:{
        title:{
          display:true,
          text:'Blood Stock',
          fontSize:25
        },
        legend:{
          display:true,
          position:'bottom',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
            
          }
        },
        tooltips:{
          enabled:true
        },
        scales:{
          scales:{yAxes: [{beginAtZero: true}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]
        }
        },
        ticks: {
        min: 0,
        max: 20
        }
      }
    });
  </script>
 
</body>
