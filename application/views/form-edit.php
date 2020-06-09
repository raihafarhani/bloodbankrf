<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Staff</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #00000;
                color: #800000;
                font-family: 'Calibri', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                margin-bottom: 30px;
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
                color: #FFFFFF;
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
        </style>
    </head>
    <body>
       
            <div class="container">
                
                   <h1>Edit Staff</h1>

                <div id="body">
                <a href="<?php echo site_url('staff/index') ?>">Back</a>
                <?php if($editUser){
                    $id = $editUser->StaffID;
                    $StaffID = $editUser->StaffID;                   
                    
                    $StaffName = $editUser->StaffName;

                    $StaffPass = $editUser->StaffPass;
                    $ContactNum = $editUser->ContactNum;
                    $Email = $editUser->Email;
                } ?>
                 <form action="<?php echo site_url('index.php/Staff/update/'.$id); ?>" method="POST">

                 
                 Staff Name<br><input type="text" name="StaffName" value="<?php echo $StaffName ?>"/></br>
                 Staff Password<br><input type="password" name="StaffPass" value="<?php echo $StaffPass ?>"/></br>
                 Contact Name<br><input type="text" name="ContactNum" value="<?php echo $ContactNum ?>"/></br>
                 Email<br><input type="text" name="Email" value="<?php echo $Email ?>"/></br>
                 <input type="submit" name="submit" value="Submit"/>
                 </form>
               </div>

                
            </div>
        </div>
    </body>
    </html>