<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Blood</title>

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
                
                   <h1>Add Blood</h1>

                <div id="body">
                <a href="<?php echo site_url('blood/index') ?>">Back</a>
                 <form action="<?php echo site_url('index.php/Blood/insert'); ?>" method="POST">

                 
                 Blood Type<br><select id="BloodType" name="BloodType">
                               <option value="A+">A+</option>
                               <option value="A-">A-</option>
                               <option value="B+">B+</option>
                               <option value="B-">B-</option>
                               <option value="O+">O+</option>
                               <option value="O-">O-</option>
                               <option value="AB+">AB+</option>
                               <option value="AB-">AB-</option></select></br>
                 DateIn<br><input type="date" name="DateIn"/></br>
                 ExpiryDate<br><input type="date" name="ExpiryDate"/></br>
                 DateOut<br><input type="date" name="DateOut"/></br>
                 <input type="submit" name="submit" value="Submit"/>
                 </form>
               </div>

                
            </div>
        </div>
    </body>
    </html>