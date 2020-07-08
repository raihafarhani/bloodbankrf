<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blood Edit</title>
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
  position: center;
  max-width: 400px;
  height: 500px;
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
    color: #FFFFFF;
}
}
        </style>
    </head>
    <body>
    <div id="login">
            <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                 <?php if($editBlood){
                    $id = $editBlood->BloodID;
                    $BloodID = $editBlood->BloodID;
                    $DonorID = $editBlood->DonorID;
                    $BloodType = $editBlood->BloodType;
                    $DateIn = $editBlood->DateIn;
                    $ExpiryDate = $editBlood->ExpiryDate ;
                    $DateOut = $editBlood->DateOut;
                } ?>
                 <form id="login-form" class="form" action="<?php echo site_url('index.php/Blood/update/'.$id); ?>" method="POST">
                 <h3 class="text-center text-danger">Blood Edit</h3>
                 <div class="form-group">              
                    <label for="DonorID" class="text-danger">Donor ID</label><br>
                    <input type="Ttext" name="DonorID" value="<?php echo $DonorID ?>"/>
                    </div>
                 <div class="form-group">
                    <label for="BloodType" class="text-danger">Blood Type</label><br>
                    <select id="BloodType" name="BloodType" value="<?php echo $BloodType ?>">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option></select></br>
                                </div>
                <div class="form-group">              
                    <label for="DateIn" class="text-danger">Date In</label><br>
                    <input type="date" name="DateIn" value="<?php echo $DateIn ?>"/>
                    </div>
                <div class="form-group">
                    <label for="ExpiryDate" class="text-danger">Expiry Date</label><br>
                    <input type="date" name="ExpiryDate" value="<?php echo $ExpiryDate ?>"/>
                    </div>
                <div class="form-group">
                    <label for="DateOut" class="text-danger">Date Out</label><br>
                    <input type="date" name="DateOut" value="<?php echo $DateOut ?>"/>
                    </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit"/>
                    </div>
                 </form>
               </div>

                
            </div>
        </div>
    </body>
    </html>