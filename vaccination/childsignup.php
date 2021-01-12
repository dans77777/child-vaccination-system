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
    <p>Please fill in this form to create a Child account.</p>
    <hr>

    <label for="name"><b>Child Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" >

    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter Gender" name="Gender" id="Gender" >



    <label for="area"><b>Area</b></label>
    <input type="text" placeholder="area" name="area" id="area" >
    
    <label for="streetno"><b>Street no</b></label>
    <input type="text" placeholder="streetno" name="streetno" id="streetno" >

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter Password" name="city" id="city" >

    <label for="DOB"><b>DOB</b></label>
    <input type="date"  name="DOB" id="DOB">
     <p> 
    </p>
    <label for="weight_in_kg"><b>Weight in KG</b></label>
    <input type="number"  name="weigh_in_kg" id="weigh_in_kg" >

    <label for="reccomended_vacc_date"><b>Recommended Vaccination Date</b></label>
    <input type="date"  name="reccomnded_vacc_date" id="reccomnded_vacc_date" >
<p>
</p>
    <label for="HID"><b>Hosptial ID</b></label>
    <input type="number" name="HID" id="HID" >
<p>
</p>
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" >

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" >

   
    <hr>
    <p>By creating an account you agree to our Terms & Privacy</a>.</p>
    
    <div class="container">
         <a href="childlogin1.php"><button type="submit" class="registerbtn" name="SignIn"class= "form control">signUP</button></a>
     
</div>
        
  <div class="container">
         <a href="newhome.php"><button type="submit" class="registerbtn" class= "form control">Back</button>
     
</div>
  <div class="container signin">
    <p>Already have an account? <a href="childlogin1.php">Login in</a>.</p>
  </div>
</form>

</body>
</html>
<?php
if(isset($_POST['SignIn']))
{

$name=$_POST['name'];
$Gender=$_POST['Gender'];
$area=$_POST['area'];
$streetno=$_POST['streetno'];
$City=$_POST['city'];
$DOB=$_POST['DOB'];
$weigh_in_Kg=$_POST['weigh_in_kg'];
$reccomnded_vacc_date=$_POST['reccomnded_vacc_date'];
$HID=$_POST['HID'];
$username=$_POST['username'];
$password=$_POST['password'];

include('connection.php');
$sql=mysqli_query($con,"insert into `child1`(`CID`,`name`,`Gender`,`area`,`streetno`,`City`,`DOB`,`weigh_in_Kg`,`reccomnded_vacc_date`,`HID`,`username`,`password`)values('','".$name."','".$Gender."','".$area."','".$streetno."','".$City."','".$DOB."','".$weigh_in_Kg."','".$reccomnded_vacc_date."','".$HID."','".$username."','".$password."') ")or die (mysqli_error($con));
mysqli_error($con);
	if($sql)
	{echo "Data inserted";}
    else
	{echo "error in insertion";}
mysqli_close($con);
}
		
?>





