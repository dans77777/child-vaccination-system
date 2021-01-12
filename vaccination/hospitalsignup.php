<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
 <body>

<form method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create a <b> Hospital account. </b></p>
    <hr>

  

    <label for="hname"><b>Hospital Name</b></label>
    <input type="text" placeholder="Enter Name" name="hname" id="hname">

    <label for="area"><b>Area</b></label>
    <input type="text" placeholder="Enter area" name="area" id="area" >
    
    
    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="Username" >

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" >

   
    <hr>
    <p>By creating an account you agree to our Terms & Privacy</a>.</p>
    
    <div class="container">
    <input type=button  class="registerbtn" class= "form control" onClick="parent.location='HospPage.php'" value='signup'>

</div>
        
  <div class="container">
         <a href="newhome.php"><button type="submit" class="registerbtn" class= "form control">Back</button>
     
</div>
  <div class="container signin">
    <p>Already have an account? <a href="hospitalloginpage11.php">Login in</a>.</p>
  </div>
</form>
        
</body>
</html>
<!--
<?php
if(isset($_POST['SignIn']))
{

$Hname=$_POST['Hname'];
$area=$_POST['area'];
$username=$_POST['username'];
$password=$_POST['password'];

include('connection.php');
$sql=mysqli_query($con,"insert into `hospital1`(`HID`,`Hname`,`area`,`username`,`password`)values('','".$Hname."','".$area."','".$username."','".$password."')")or die (mysqli_error($con));
mysqli_error($con);
	if($sql)
	{echo "Data inserted";}
    else
	{echo "error in insertion";}
mysqli_close($con);
}
		
?>




-->