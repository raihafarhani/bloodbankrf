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
                background-color: #00000;
                color: #800000;
                font-family: 'Calibri', sans-serif;
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
                font-size: 84px;
            }

            .links > a {
                color: #800000;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

* {
  box-sizing:border-box;
}

.left {
  background-color:#800000;
  padding:20px;
  float:left;
  width:20%; /* The width is 20%, by default */
}

.main {
  background-color:#800000;
  padding:30px;
  float:left;
  width:60%; /* The width is 60%, by default */
  text-align: center;
}

.right {
  background-color:#800000;
  padding:20px;
  float:left;
  width:20%; /* The width is 20%, by default */
}

/* Use a media query to add a break point at 800px: */
@media screen and (max-width:800px) {
  .left, .main, .right {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
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
    <a href="<?php echo site_url('index.php/staff') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Staff</a>
    <a href="<?php echo site_url('index.php/blood') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blood</a>
    <a href="<?php echo site_url('index.php/donor') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donor</a>
   </div>
 
  </div> 
                

            <div class="container">
                
           

            <div class="links">
                    
            <a href="<?php echo site_url('index.php/Forminput/input') ?>">Add</a>

                </div>
                <p></p>
            



 <table border="1">
   <tr>
   <td>No</td>
   <td>Staff ID</td>
   <td>Staff Name</td>
   <td>Staff Password</td>
   <td>Contact Number</td>
   <td>Email</td>
   <td>Edit or Delete</td>
   </tr>     

<?php 
$no = 1;
foreach ($result as $r) { ?>
   <tr>

   <td><?php echo $no++ ?></td>
   <td><?php echo $r['StaffID'] ?></td>
   <td><?php echo $r['StaffName'] ?></td>
   <td><?php echo $r['StaffPass'] ?></td>
   <td><?php echo $r['ContactNum'] ?></td>
   <td><?php echo $r['Email'] ?></td>
   <td>
   <a href="<?php echo site_url('index.php/staff/form_edit/' .$r['StaffID']) ?>">Edit</a>  ||
   <a href="<?php echo site_url('index.php/staff/delete/' .$r['StaffID']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
   </td>
   </tr>      

<?php } ?>    

</table>
               

                </div>
                </div>
                </div>
            </div>
        
    </body>
    </html>