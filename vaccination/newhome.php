<!DOCTYPE html>
<html lang="en">
<head>
  <title>OUR PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("homebg.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
  
</head>
<body>
<div class="bg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="newhome.php">HOME</a>
    </div>
    <ul class="nav navbar-nav">
       <a class="navbar-brand" href="aboutus.html">ABOUT US</a>
              <a class="navbar-brand" href="contactus.php">CONTACT US</a>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>SIGN UP <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="childsignup.php">Child</a></li>
          <li><a href="parentsignup.php">Parent</a></li>
          <li><a href="hospitalsignup.php">Hospital</a></li>
        </ul>
      </li>
     
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span>LOGIN IN<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="childlogin1.php">Child</a></li>
          <li><a href="parentlogin1.php">Parent</a></li>
          <li><a href="hosptialloginpage1.php">Hospital</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
  
<div class="container">
<center><b>
  <h1>Welcome to the Primary Vaccination Centre</h1>
  </b>
  <h3>Your one-stop for all the solutions.
  </h3>
  <h1> </h1>
  
  <h4> Know your child's vaccine status in minutes! </h4>
  <h4> Parents check your child's health card now! </h4>
  <h4> Just a few details to sign up and you're a part of the family! </h4>
  </center>
</div>

</body>
</html>
<?php include('downblock1.php')?>
