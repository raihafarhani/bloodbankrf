<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title>Blood</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
        </style>
    </head>
    <body>
    <!-- Navbar -->

  <h2>Send Email Using SMTP</h2><br>

  
  
  <?php
        //the subject
        $sub = "Your subject";
        //the message
        $msg = "Your message";
        //recipient email here
        $rec = "raihafarhani98@gmail.com";
        //send email
        mail($rec,$sub,$msg);
        ?>

  


  <form action="<?php echo base_url('index.php/email/send'); ?>" method="post">
    <input type="email" name="from" class="form-control" placeholder="Enter Email" required><br>
    <textarea name="message" class="form-control" placeholder="Enter message here" required></textarea><br>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
    </body>
</html>
