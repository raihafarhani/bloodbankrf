<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blood Bank</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
/* The Modal (background) */
html, body {
  margin: 0;
  padding: 0;
  background-color: #800000;
  height: 100vh;
  margin: 0;
  background-image: url("image/blood.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
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
                    
                        <form id="login-form" class="form" action="index.php/LoginStaff/checklogin" method="POST">
                        <h3 class="text-center text-danger">Staff Login</h3>
                            <div class="form-group">
                                <label for="StaffName" class="text-danger">Staff Name:</label><br>
                                <input type="text" name="Staff Name" id="Staff Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="StaffPass" class="text-danger">Password:</label><br>
                                <input type="password" name="StaffPass" id="StaffPass" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-danger"><span>Remember me</span> 
                                <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="login" class="btn btn-danger btn-md" value="Login">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo site_url('index.php/staffregister') ?>" class="text-danger">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
