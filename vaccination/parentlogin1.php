<html>
<head>
<link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin : 0%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("parentbg.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin-top : 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2>Welcome to the Vaccination Centre!</h2>
<h3> Please enter the credentials of the Parent here </h3>
<div class="bg-img">
  <form  class="container" method="POST">
    <h1>Login</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <button type="submit" class="btn" name="LOGIN" class= "form control">Login</button>
    <a href="home1.php"><button type="submit" class="btn" class= "form control">Back</button>
    
    
    <button type="reset" class="btn" class= "form control">Reset</button>
    
  </form>
</div>
</body>
</html>
    
<?php
if(isset($_POST['LOGIN']))
	{
		echo "hello world";
		
		// $s=extract($_GET);
		 $Username=$_POST['Username'];
         $Password=$_POST['Password'];
		 	
    session_start();
    echo $PID;
		include("connection.php");
		$qry="select * from parent1 where Username='$Username' and Password='$Password'";
		
    $run=mysqli_query($con,$qry);
    if($run)
    {
      
      if(mysqli_num_rows($run)>=1)
		{
      
			$r=mysqli_fetch_array($run);
			
			$_SESSION['PID']=$r[0];
		    
			echo $_SESSION['PID'];
		    
		    
      header("refresh:1;url=PARENTPage.php");
     //// echo "<script>location.replace('childpage.php')</script>";
			echo "<script>alert('Login successfully');</script>";
		    
		}
		else
			echo "<script>alert('Invalid Login');</script>";
			
	}		

    
    else{
      echo $con->error;
    }
  }
?>