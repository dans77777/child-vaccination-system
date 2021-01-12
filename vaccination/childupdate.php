<?php

include('connection.php');
session_start();

 if(isset($_POST['done'])){

 $CID = $_SESSION['CID'];
 echo "hellloooooooooooooo";
 $area = $_POST['area'];
 $streetno= $_POST['streetno'];
 $city = $_POST['city'];
 $weigh_in_Kg = $_POST['weigh_in_Kg'];
 $reccomnded_vacc_date= $_POST['reccomnded_vacc_date'];
 $username= $_POST['username'];
 $password= $_POST['password'];
 
 
 
 $q = 'update child1 set CID="'.$CID.'",area="'.$area.'",streetno="'.$streetno.'",  city="'.$city.'", weigh_in_Kg="'.$weigh_in_Kg.'",reccomnded_vacc_date="'.$reccomnded_vacc_date.'", username="'.$username.'" , password="'.$password.'" where CID="'.$CID.'"';

 $query = mysqli_query($con,$q);
 mysqli_error($con);

 header('location:childpage.php');
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

 

 <label> area</label>
 <input type="text" name="area" class="form-control"> <br>

 <label> streetno </label>
 <input type="number" name="streetno" class="form-control"> <br>

 <label>  city </label>
 <input type="text" name="city" class="form-control"> <br>

 <label> weight_in_kg </label>
 <input type="number" name="weigh_in_kg" class="form-control"> <br>

 <label> reccomanded vacc date</label>
 <input type="date" name="reccomnded_vacc_date" class="form-control"> <br>

 <label> username</label>
 <input type="text" name="username" class="form-control"> <br>

 <label> password</label>
 <input type="password" name="password" class="form-control"> <br>
 

 

 <button type="submit" class="btn btn-success" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>