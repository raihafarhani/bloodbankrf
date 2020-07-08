<!DOCTYPE html>
<html>
 
<head>
  <meta charset="utf-8">
  <title>2019 Stock</title>
  <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <title>2019 Stockk</title>
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

 
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <style>
    html,
    body {
      height: 100%;
      width: 100%;
    }
 
    #myChart {
      height: 100%;
      width: 100%;
      min-height: 150px;
    }
 
    .zc-ref {
      display: none;
    }
    body{
	background-color: #FFFFFF;
	margin-top: 55px;
	margin-bottom: 30px;
	margin-left: 0px;
	margin-right: 500px;
}
    .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
		 text-align: center;
}


.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

         /* The container must be positioned relative: */
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: red;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: red;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}  
  </style>
</head>
 
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large w3-red">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="<?php echo site_url('index.php/mstaff') ?>" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="<?php echo site_url('index.php/staff') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
    <a href="<?php echo site_url('index.php/donor') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donor</a>
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
  <div id="myChart"><a class="zc-ref" href="https://www.zingchart.com/">Blood Stock in 2019</a></div>
  <script>
   // ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
    var myConfig = {
      "graphset": [{
        "type": "bar",
        "background-color": "white",
        "title": {
          "text": "Monthly Stock in 2019",
          "font-color": "#7E7E7E",
          "backgroundColor": "none",
          "font-size": "22px",
          "alpha": 1,
          "adjust-layout": true,
        },
        "plotarea": {
          "margin": "dynamic"
        },
        "legend": {
          "layout": "x8",
          "overflow": "page",
          "alpha": 0.05,
          "shadow": false,
          "align": "center",
          "adjust-layout": true,
          "marker": {
            "type": "circle",
            "border-color": "none",
            "size": "10px"
          },
          "border-width": 0,
          "maxItems": 8,
          "toggle-action": "hide",
          "pageOn": {
            "backgroundColor": "#000",
            "size": "10px",
            "alpha": 0.65
          },
          "pageOff": {
            "backgroundColor": "#7E7E7E",
            "size": "10px",
            "alpha": 0.65
          },
          "pageStatus": {
            "color": "black"
          }
        },
        "plot": {
          "bars-space-left": 0.15,
          "bars-space-right": 0.15,
          "animation": {
            "effect": "ANIMATION_SLIDE_BOTTOM",
            "sequence": 0,
            "speed": 800,
            "delay": 800
          }
        },
        "scale-y": {
          "line-color": "#7E7E7E",
          "item": {
            "font-color": "#7e7e7e"
          },
          "values": "0:60:10",
          "guide": {
            "visible": true
          },
          "label": {
            "text": "Number of bags",
            "font-family": "arial",
            "bold": true,
            "font-size": "14px",
            "font-color": "#7E7E7E",
          },
        },
        "scaleX": {
          "values": ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"],
          "placement": "default",
          "tick": {
            "size": 58,
            "placement": "cross"
          },
          "itemsOverlap": true,
          "item": {
            "offsetY": -55
          }
        },
        
        "tooltip": {
          "visible": false
        },
        "crosshair-x": {
          "line-width": "100%",
          "alpha": 0.18,
          "plot-label": {
            "header-text": "%kv Bags"
          }
        },
        "series": [{
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "alpha": 0.95,
            "borderRadiusTopLeft": 7,
            "background-color": "red",
            "text": "A+",
          },
          {
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "borderRadiusTopLeft": 7,
            "alpha": 0.95,
            "background-color": "orange",
            "text": "A-"
          },
          {
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "alpha": 0.95,
            "borderRadiusTopLeft": 7,
            "background-color": "yellow",
            "text": "B+"
          },
          {
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "borderRadiusTopLeft": 7,
            "alpha": 0.95,
            "background-color": "green",
            "text": "B-"
          },
          {
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "borderRadiusTopLeft": 7,
            "alpha": 0.95,
            "background-color": "blue",
            "text": "AB+"
          },
          {
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "borderRadiusTopLeft": 7,
            "alpha": 0.95,
            "background-color": "indigo",
            "text": "AB-"
          },
          {
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "borderRadiusTopLeft": 7,
            "alpha": 0.95,
            "background-color": "violet",
            "text": "O+"
          },
          {
            "values": [37,57,45,37,57,45,37,57,45,37,57,45,37],
            "borderRadiusTopLeft": 7,
            "alpha": 0.95,
            "background-color": "pink",
            "text": "O-"
          }
        ]
      }]
    };
 
    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: '90%',
      width: '100%'
    });
  </script>
</body>
 
</html>