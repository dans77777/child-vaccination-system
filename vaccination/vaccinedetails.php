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
      <a class="navbar-brand" href="newhome.html">HOME</a>
    </div>
    <ul class="nav navbar-nav">
       <a class="navbar-brand" href="aboutus.html">ABOUT US</a>
              <a class="navbar-brand" href="contactus.html">CONTACT US</a>
     
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

<center><b>
<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 150%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


<h2>Welcome to the Vaccine Page</h2>
<h4>Here are the details to all the available vaccines</h4>











 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> VID </th>
 <th> Vaccine name </th>
 <th> ExpiryDate</th>
 <th> cost</th>
 <th> validAgeGroup</th>
 
 <th>Delete </th>
 <th>Update </th>  
 


 </tr >

 <?php

include('connection.php');


session_start();
$HID=$_SESSION['HID'];
echo $HID;
$query="SELECT * FROM vaccine1 where HID='$HID'";
$query_run= mysqli_query($con,$query);


 while($res = mysqli_fetch_array($query_run)){
  ?>
 <tr class="text-center">
 <td> <?php echo $res['VID'];  ?> </td>
 <td> <?php echo $res['Vname'];  ?> </td>
 <td> <?php echo $res['ExpiryDate'];  ?> </td>
 <td> <?php echo $res['cost'];  ?> </td>
 <td> <?php echo $res['validAgeGroup'];  ?> </td>
 
 <td> <button class="btn-danger btn"> <a href="./delete.php? VID=<?php echo $res['VID']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn" name="update" > <a href="update.php?VID=<?php echo $res['VID']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }

 mysqli_error($con);
  ?>
 




 </table>  

 

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>
