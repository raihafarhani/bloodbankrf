<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Staff Edit</title>
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
  height: 450px;
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
                 
               <?php if($editUser){
                    $id = $editUser->StaffID;
                    $StaffID = $editUser->StaffID;                   
                    
                    $StaffName = $editUser->StaffName;

                    $StaffPass = $editUser->StaffPass;
                    $ContactNum = $editUser->ContactNum;
                    $Email = $editUser->Email;
                } ?>
                 <form id="login-form" class="form" action="<?php echo site_url('index.php/Staff/update/'.$id); ?>" method="POST">
                 <h3 class="text-center text-danger">Staff Edit</h3>
                 <div class="form-group">
                    <label for="StaffName" class="text-danger">Staff Name:</label><br>
                    <input type="text" name="StaffName" value="<?php echo $StaffName ?>"/>
                 </div>
                 <div class="form-group">
                    <label for="StaffPass" class="text-danger">Staff Password :</label><br>
                    <input type="password" name="StaffPass" value="<?php echo $StaffPass ?>"/>
                 </div>
                 <div class="form-group">
                    <label for="ContactNum" class="text-danger">Contact Number:</label><br>
                    <input type="text" name="ContactNum" value="<?php echo $ContactNum ?>"/>
                </div>
                <div class="form-group">
                    <label for="Email" class="text-danger">Email:</label><br>
                    <input type="text" name="Email" value="<?php echo $Email ?>"/>
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