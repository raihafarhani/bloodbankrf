<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title>Staff</title>
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
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
    <div class="flex-center position-ref full-height">
    <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="<?php echo site_url('index.php/mstaff') ?>" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="<?php echo site_url('index.php/blood') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blood</a>
    <a href="<?php echo site_url('index.php/donor') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donor</a>
   </div>
 
  </div>
                   <div class="top-right links">                   
                   <a href="<?php echo site_url('index.php/Welcome') ?>">Logout</a>    
                   </div>
                            

            <div class="container">
                <div class="title m-b-md">
                  Welcome to Staff Page
                    
                </div>

                
            </div>
        </div>
    </body>
</html>
