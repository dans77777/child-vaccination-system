<html>

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  height: 100%;
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
</style>
 </head>
<body>
<div style="font-size:40px;font-family:Chiller;padding-top:-10px;color:black"><b>TrackSchoolVans.Com</b></div>
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<span style="color:white;font-family:cooper;font-size:18px ;padding-left:17px;">
      Get IN !<br><img src="images/symbol.jpeg" height="43" width="75" style="padding-left:30px">
		<br>  & sit down.</span>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" style="margin-left:60px "><a href="home1.php">HOME</a></li>

      <li><a href="about us.php">ABOUT US</span></a></li>
      <li><a href="contactus1.php">CONTACT US</a></li>
	  
    </ul>
	
	<ul class="nav navbar-nav navbar-right">  
      <li class="dropdown">
	  <a href="javascript:void(0)" class="dropbtn">
	  <span class="glyphicon glyphicon-user"></span>Sign Up</a>
	  <div class="dropdown-content">
      <a href="vanreg.php">Login via VAN</a>
      <a href="schoolreg.php">Login via SCHOOL</a>
      <a href="parentreg.php">Login via PARENTS</a>
		</div>
		</li>
	<li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
	
    </ul><br>
  </div>
</nav>
  