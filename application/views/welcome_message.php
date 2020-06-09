<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #800000;
    
  }

  .jumbotron {
    background-color: #800000; 
    color: #FFFFFF; 
    background-image: url("image/blood.jpg");
  }

  .navbar{
    background-color: #800000; 
    color: #FFFFFF; 
    font-family: 'Nunito', sans-serif;
    font-size: 18px;
  }

  .navbar-nav{
    background-color: #800000; 
    color: #FFFFFF; 
    font-family: 'Nunito', sans-serif;
    position: 'center';
  }

  .nav{
    background-color: #800000; 
    color: #FFFFFF; 
    font-family: 'Nunito', sans-serif;
  }

  .col-sm-4 {
    background-color: #800000; 
    color: #FFFFFF;
  }
  .col-sm-8{
    background-color: #800000; 
    color: #FFFFFF;
  }

  img {
              width:40%;
              position: absolute;
            }

  .nav-pills{
    background-color:#800000;
  }
body{
  background-color: #800000;
}
  
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Blood Bank</h1>
  <p>Let's Donate!</p> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    
      <ul class="nav navbar-nav ">
        
        <li><a href="<?php echo site_url('index.php/user') ?>">Login</a></li>
        <li><a href="<?php echo site_url('index.php/userr') ?>">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>About</h2>
      
      <div class="fakeimg"><image src="image/drop.png"></div>
      
      <h4>Visit this website for more info</h4>
        <ul class="nav nav-pills nav-stacked">
        <li><a href="https://www.pdn.gov.my/">National Blood Centre</a></li>
        <li><a href="http://www.moh.gov.my/index.php">Ministry of Health</a></li>
        <li><a href="http://hmelaka.moh.gov.my/v2/">Hospital of Melaka</a></li>
        
       
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <h2>Blood Donation</h2>
      <h5></h5>
      <div class="fakeimg"><image src="image/donate.jpg"></div>
      <h5>If you have donated blood, even once, you are a special person and your contribution is priceless!! </h5>
      <p>To donate blood, the donor is driven by various factors such as altruism, the feeling of wanting to help 
      patients in need that may include friends and relative, or even after being persuaded by friends and relatives. </p>
      
      <h2>Mobile Blood Donation Session</h2>
      <h5></h5>
      <div class="fakeimg"><image src="image/donate1.jpg"></div>
     <p>Aside blood donation at the blood banks, mobile blood donation programs are also conducted actively to make it 
      easier for the general public to come forward to donate their blood. These mobile sessions are conducted at the 
      government as well as private offices and buildings, factories, institutes of higher learning as well as shopping 
      centres. </p><br>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Hospital Jasin Melaka</p>
</div>

</body>
</html>
