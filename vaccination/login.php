<head>
  <title>Login Form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
  margin-top: -30px;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding:  15px 25px;;
  text-decoration: none;
  font-size: 17px;
  width:50px;
}

.topnav a:hover{
  background-color: #ddd;
  color: black;
  width:50px;
}
.topnav a:active{
  background-color: black;
  color: white;
  width:50px;
}
</style>

<div class="container">
 <center>    <h1>Login Form</h1></center><br>
  </div>


<div class="form" style= "margin-top:-10px">
<div class="topnav">
 <div class="active"><a href="log.php">Van</a></div>
  <a href="sclog.php">School </a>
  <a href="plog.php">Parent</a>
  </div><br>
  
  <div><img src	="images/f.png" height=150></div>
    <br>
<form name="login" method="get" >

  
	<!--<input type="text" placeholder="id" name="id">-->
    <input type="text" placeholder="username" name="name">
    <input type="password" placeholder="password" name="password" >
    <input type=submit name="log" value="Login" style="background-color:lightblue">
   <a href="home1.php"><input type=button name="log" value="Back" style="background-color:lightgreen"></a>
	<p class="message">Not registered? <a href="vanreg.php">Create an account</a></p>
</form>
</div>
<?php
	if(isset($_GET['log']))
	{
		
		 $s=extract($_GET);
		 	
		session_start();
		include("connection.php");
		$qry="select * from vanreg where username='$name' and pass='$password'";
		
		$run=mysqli_query($con,$qry)or die("error in querry");
		if(mysqli_num_rows($run)>=1)
		{
			$r=mysqli_fetch_array($run);
			
			$_SESSION['vno']=$r[0];
		    
			echo $_SESSION['vno'];
		    
		    
			header("refresh:1;url=van details.php");
			echo "<script>alert('Login successfully');</script>";
		    
		}
		else
			echo "<script>alert('Invalid Login');</script>";
			
	}
?>

</html>