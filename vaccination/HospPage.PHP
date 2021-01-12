<?php session_start();?>

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


</style>
  
</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="newhome.php">HOME</a>
    </div>
    <ul class="nav navbar-nav">
       <a class="navbar-brand" href="aboutus.html">ABOUT US</a>
              <a class="navbar-brand" href="contactus.php">CONTACT US</a>
              <a class="navbar-brand" href="trigger.php">GENERATE COUNT</a>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <a class="navbar-brand" href="Hospupdate.php">UPDATE ACCOUNT</a>
       <ul class="nav navbar-nav navbar-right">
      <a class="navbar-brand" href="deleteHosp.php">DELETE ACCOUNT</a>
     
     
        </ul>
      </li>
    </ul>
  
</nav>
	
  
	<center><b>
<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 80%;
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

<h3>HOSPITAL FORM</h3>
<p>Please enter required :</p>


<div class="container">
  <form action="vaccinedetails.php">
    <label for="HID">CHECK VACCINE DETAILS</label>  
   <!--<button class="btn-danger btn"> <a href="./displayvaccByhosp.php? HID=<?php echo $res['HID']; ?>" class="text-white"> Click here </a>  </button> -->
<input type="submit" class= "form control" value="CLICK HERE">

      
  </form>
</div>


</body>
</html>