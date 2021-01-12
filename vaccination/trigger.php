<?php 
    session_start();
?>
<html>

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 }
 
 li a:hover, .dropdown:hover .dropbtn {
  color: white;
}

li.dropdown {
  display: inline-block;
}
 
 .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;
color:red}

.dropdown:hover .dropdown-content {
  display: block;
}


* {
  box-sizing: border-box;

}



/* Clearfix (clear floats) */
.row::after {
   margin-left: 200%;
  content: "";
  clear: both;
  display: table;
}

}

body {

  //margin-top: 50%;
  margin-left:-10%;
  font-family: Arial;
  font-size: 5px;
}

.container {
  margin-left:-40%;
  margin-top:20%;
  position: relative;
  max-width:300px;
  margin: 0 auto;
  max-height: 700px;


}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 35px;
}
.container .btn {
  position: absolute;
  top: 50%;
  left: 30%;
 
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 5px 50px;
  border: none;
   cursor: pointer;
  border-radius: 5px;
  text-align: center;

}

.container .btn:hover {
  background-color: black;
}
.btn1
{
  margin-right:70px;
  margin-top: 100px;
}
body, html {

align:center;
  height: 50%;
  margin: 0;
}
body, html {

align:center;
  height: 180%;
  margin: 0;
}


.bg {

  /* The image used */
 //background-image: url("bg2.jpg");
 
  /* Full height */
  height: 200%;
  align:center;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-top:5%;
  height:20%;
 
  margin-right:100px;
}
.bg1 {

  /* The image used */
 //background-image: url("bg2.jpg");
  background-color: #232323;
  /* Full height */
  height: 200%;
  //align:center;

  /* Center and scale the image nicely */
  //background-position: center;
  background-repeat: no-repeat;
 // background-size: cover;
  margin-top:5%;
  height:100%;
  width:80%;
 margin-left:10%;
  margin-right:20px;
}
.bg2{

  /* The image used */
 //background-image: url("bg2.jpg");
  background-color:white;
  /* Full height */
  height: 200%;
  align:center;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  //margin-top:5%;
  width:50%;
  height:60%;
  margin-left:270px;
  margin-right:140px;
}


* {
    box-sizing: border-box;
}



/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

.column1 {
    float: left;
    width: 20%;
   
}
.column2 {
    float: left;
    width: 25%;
   padding: 20px;
 }
.columns4 {
    float: left;
    width: 44.3%;
    padding: 22px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  
    color: white;
    font-size: 18px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 10px;
    text-align: left;
}




@media only screen and (max-width: 500px) {
    .columns {
	
        width: 80%;
    }
}
.checked {
  color: orange;
}
</style>
 </head>
<body style="background-image:url(images/bg.png);background-repeat:no-repeat;">
<div style="font-size:40px;font-family:Chiller;padding-top:-10px;color:white"><b>Primary Child vaccination</b></div>
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active" style="margin-left:60px "><a href="HOME.php">HOME</a></li>
	  <li><a href="aboutus.php">ABOUT US</a></li>
	  <li><a href="contactus.php">CONTACT US</a></li>
          <li><a href="HEALTHCARD.PHP">HEALTH CARD </a></li>
    
    </ul>
	
	<ul class="nav navbar-nav navbar-right">  
      <li class="dropdown">
	  <a href="javascript:void(0)" class="dropbtn">
	  <span class="glyphicon glyphicon-user"></span>DELETE ACCOUNT</a>
            <li><a href="UPDATE.PHP">UPDATE ACCOUNT</a></li>
		</li>
	
    </ul><br>
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
<body>
<h2> SEE THE GENDER COUNT OF YOUR HOSPITAL!</h2>
    
<h3>GENERATE GENDER COUNT INSTANTLY</h3>
</div>
<?php
//session_start();
include('connection.php');
$HID=$_SESSION['HID'];

$query="SELECT * FROM gender_count where HID='$HID'";;
$query_run= mysqli_query($con,$query);


 while($res = mysqli_fetch_array($query_run)){
  ?>
 <tr >
 <td> <?php echo "HID:     ", $res['HID'];  ?> </td><br>
 <td> <?php echo "Female:    " ,$res['Female'];  ?> </td><br>
 <td> <?php echo "Male:     ",$res['Male'];  ?> </td><br>
 <td> <?php echo "Others:         ",$res['Others'];  ?> </td><br>
 
 
 
 
 </tr>

 <?php 
 }

 mysqli_error($con);
  ?>
 




 </table>  


</body>
</html>