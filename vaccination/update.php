<?php

include('connection.php');

 if(isset($_POST['done'])){

 $VID = $_GET['VID'];
 
 $Vname = $_POST['Vname'];
 $ExpiryDate = $_POST['ExpiryDate'];
 $cost = $_POST['cost'];
 $validAgeGroup= $_POST['validAgeGroup'];
 
 
 $q = 'update vaccine1 set VID="'.$VID.'",  Vname="'.$Vname.'", ExpiryDate="'.$ExpiryDate.'",cost="'.$cost.'",validAgeGroup="'.$validAgeGroup.'" where VID="'.$VID.'"';

 $query = mysqli_query($con,$q);
 mysqli_error($con);

 header('location:vaccinedetails.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label>  vaccineName name: </label>
 <input type="text" name="Vname" class="form-control"> <br>

 <label> ExpiryDate </label>
 <input type="date" name="ExpiryDate" class="form-control"> <br>

 <label> cost </label>
 <input type="number" name="cost" class="form-control"> <br>

 <label> validAgeGroup </label>
 <input type="number" name="validAgeGroup" class="form-control"> <br>
 

 

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>