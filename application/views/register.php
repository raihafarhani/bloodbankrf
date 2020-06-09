<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

       
        <!-- Styles -->
        <style>
            html, body {
                background-color: #800000;
                color: #FFFFFF;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            #login .container #login-row #login-column #login-box {
  margin-top: 90px;
  max-width: 600px;
  height: 730px;
  border: 1px solid #800000;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

#text-info{
    color: #800000;
}
        </style>
    </head>
    <body>
                   
    <div id="login">
    <?php echo $this->session->flashdata('error') ?>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                 <form id="login-form" class="form" action="<?php echo site_url('index.php/Register/insert') ?> " method="POST">
                 <h3 class="text-center text-danger">Donor Registration</h3>
                            <div class="form-group">
                                <label for="FName" class="text-danger">First Name:</label><br>
                                <input type="text" name="FName" placeholder="First Name"/> 
                                </div>
                            <div class="form-group">
                                <label for="LName" class="text-danger">Last Name:</label><br>
                                <input type="text" name="LName" placeholder="Last Name"/> 
                                </div>
                            <div class="form-group">
                                <label for="DonorPass" class="text-danger">Password:</label><br>
                                <input type="password" name="DonorPass" placeholder="Password"/> 
                                </div>
                            <div class="form-group">
                                <label for="ICNum" class="text-danger">IC Number:</label><br>
                                <input type="text" name="ICNum" placeholder="IC Number"/> 
                                </div>
                            <div class="form-group">
                                <label for="Email" class="text-danger">Email:</label><br>
                                <input type="text" name="Email" placeholder="Email"/> 
                                </div>
                            <div class="form-group">
                                <label for="ContactNum" class="text-danger">Contact Number:</label><br>
                                <input type="text" name="ContactNum" placeholder="Contact Number"/> 
                                </div>
                            <div class="form-group">
                                <label for="Address" class="text-danger">Address:</label><br>
                                <input type="text" name="Address" placeholder="Address"/> 
                                </div>
                            <div class="form-group">
                               <label for="BloodType" class="text-danger">Blood Type:</label><br>
                               <select id="BloodType" name="BloodType" placeholder="Blood Type" value="<?php echo $BloodType ?>">
                               <option value="A+">A+</option>
                               <option value="A-">A-</option>
                               <option value="B+">B+</option>
                               <option value="B-">B-</option>
                               <option value="O+">O+</option>
                               <option value="O-">O-</option>
                               <option value="AB+">AB+</option>
                               <option value="AB-">AB-</option></select> 
                               </div>
                            <div class="form-group">
                                <input type="submit" name="Submit" value="Register"/> 
                                </div>
                            
                               </form>
            </div>
        </div>
    </body>
</html>
