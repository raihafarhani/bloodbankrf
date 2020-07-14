<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
         body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        .fa-anchor,.fa-coffee {font-size:200px}
            html, body {
                background-color: #800000;
                color: #FFFFFF;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #FF0000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
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
</style>
 
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large w3-red">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="<?php echo site_url('index.php/mstaff') ?>" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="<?php echo site_url('index.php/staff') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
    <a href="<?php echo site_url('index.php/blood') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blood</a>
    <div class="w3-dropdown-hover">
    <button class="w3-button">Donor</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="<?php echo site_url('index.php/donor') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">All</a>
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
    <div class="w3-dropdown-hover">
    <button class="w3-button">Stock</button>
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
                   <div class="top-right links">                   
                   <a href="<?php echo site_url('index.php/Welcome') ?>">Logout</a>    
                   </div>
                            

            <div class="container">
                <div class="title m-b-md">
                    Admin Page
                    
                </div>

               
            </div>
        </div>
    </body>
</html>
