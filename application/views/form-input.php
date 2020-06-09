<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Staff</title>

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
                
                   <h1>Add Staff</h1>

                <div id="body">
                <a href="<?php echo site_url('staff/index') ?>">Back</a>
                 <form action="<?php echo site_url('index.php/Staff/insert'); ?>" method="POST">

                 
                 Staff Name<br><input type="text" name="StaffName"/></br>
                 Staff Password<br><input type="password" name="StaffPass"/></br>
                 Contact Number<br><input type="text" name="ContactNum"/></br>
                 Email<br><input type="text" name="Email"/></br>
                 <input type="submit" name="submit" value="Submit"/>
                 </form>
               </div>

                
            </div>
        </div>
    </body>
    </html>