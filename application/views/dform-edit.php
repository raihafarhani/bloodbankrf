<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Donor Edit</title>
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
  max-width: 400px;
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
                 <?php if($editDonor){
                    $id = $editDonor->DonorID;
                    $FName = $editDonor->FName;
                    $LName = $editDonor->LName;
                    $DonorPass = $editDonor->DonorPass;
                    $ICNum = $editDonor->ICNum;
                    $Email = $editDonor->Email;
                    $ContactNum = $editDonor->ContactNum;
                    $Address = $editDonor->Address;
                    $BloodType = $editDonor->BloodType;
                    
                   
                } ?>
                 <form id="login-form" class="form" action="<?php echo site_url('index.php/Donor/update/'.$id); ?>" method="POST">
                 <h3 class="text-center text-danger">Donor Edit</h3>
                 <div class="form-group">
                    <label for="FName" class="text-danger">First Name</label><br>
                    <input type="text" name="FName" value="<?php echo $FName ?>"/>
                    </div>
                 <div class="form-group">
                    <label for="LName" class="text-danger">Last Name</label><br>
                    <input type="text" name="LName" value="<?php echo $LName ?>"/>
                </div>
                 <div class="form-group">
                    <label for="DonorPass" class="text-danger">Password</label><br>
                    <input type="password" name="DonorPass" value="<?php echo $DonorPass ?>"/>
                </div>
                 <div class="form-group">
                    <label for="ICNum" class="text-danger">IC Number</label><br>
                    <input type="text" name="ICNum" value="<?php echo $ICNum ?>"/>
                </div>
                 <div class="form-group">
                    <label for="Email" class="text-danger">Email</label><br>
                    <input type="text" name="Email" value="<?php echo $Email ?>"/>
                </div>
                 <div class="form-group">
                    <label for="ContactNum" class="text-danger">Contact Number</label><br>
                    <input type="text" name="ContactNum" value="<?php echo $ContactNum ?>"/>
                </div>
                 <div class="form-group">
                    <label for="Address" class="text-danger">Address</label><br>
                    <input type="text" name="Address" value="<?php echo $Address ?>"/>
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
                               <option value="AB-">AB-</option></select></br></div>
                 <div class="form-group">
                    <input type="submit" name="submit" value="Submit"/>
                    </div>
                 </form>
               </div>

                
            </div>
        </div>
    </body>
    </html>