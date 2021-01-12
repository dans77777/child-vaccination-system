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
    <meta name="viewport" content="width=device-width, initial-scale=1">


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

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}


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
 width:20%;
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
body {
  font-family: Arial;
}

input[type=text], select {
  width: 180%;
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
  width: max-content;
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
 </head>
<body style="background-image:url(images/bg.png);background-repeat:no-repeat;">
<div style="font-size:40px;font-family:Chiller;padding-top:-10px;color:white"><b>Primary Child vaccination</b></div>
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active" style="margin-left:60px "><a href="newhome.php">HOME</a></li>
	  <li><a href="aboutus.php">ABOUT US</a></li>
	  <li><a href="contactus.php">CONTACT US</a></li>
    <li><a href="HEALTHCARD.php">HEALTH CARD </a></li>
          <li><a href="vaccinedetails2.php">AVAILABLE VACCINES </a></li>
    
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
      <a class="navbar-brand" href="childupdate.php">UPDATE ACCOUNT</a>
       <ul class="nav navbar-nav navbar-right">
      <a class="navbar-brand" href="childDelete.php">DELETE ACCOUNT</a>
	
    </ul><br>
      </ul>
    </div>
    
</nav>
  
	<center><b>

<body><br>
<h2><b> WELCOME TO THE CHILD PAGE</b></h2><br>
<br>
<body>



<form method="POST">
<h4> Enter ID of Hospital as per requirement</h4>
<input type="number" name="HID" placeholder="Enter id of hospital to search"/><br/>
<br>
<input type="submit" name="search" value="search Data"/>
<br>
 
</form>

<?php
include('connection.php');

if(isset($_POST['search']))

{
$HID=$_POST['HID'];

$query="SELECT * FROM hospital1 where HID='$HID'";
$query_run= mysqli_query($con,$query);
while($row = mysqli_fetch_array($query_run))
{

?>

<form action="" method="POST">
     
     <input type="text" name="Hname" value="<?php echo $row['Hname']?>"/>
     <input type="text" name="area" value="<?php echo $row['area']?>"/>

     </form>
     <?php
}

}
?>

<body>



<div style="overflow-x:auto;">
  <table>
   <tr>
 <th>CID</th>
 <th>Name</th>
 <th>Gender</th>
 <th>Area</th>
 <th>Street No</th>
 <th>City</th>
 <th>DOB</th>
 <th>Weight in KG</th>
 <th>Recommended date of Vaccine</th>
 <th>HID</th>
 <th>Username</th>
 
    </tr>
    
  
</div>

</body>
    
   
<?php

include('connection.php');
$CID=$_SESSION['CID'];
$query="SELECT * FROM child1 where CID='$CID'";
$query_run= mysqli_query($con,$query);
while($res = mysqli_fetch_array($query_run)){
  ?>
  <div style="overflow-x:auto;">
 <tr >
 <td> <?php echo $res['CID'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['Gender'];  ?> </td>
 <td> <?php echo $res['area'];  ?> </td>
 <td> <?php echo $res['streetno'];  ?> </td>
 <td> <?php echo $res['city'];  ?> </td>
 <td> <?php echo $res['DOB'];  ?> </td>
 <td> <?php echo $res['weigh_in_Kg'];  ?> </td>
 <td> <?php echo $res['reccomnded_vacc_date'];  ?> </td>
 <td> <?php echo $res['HID'];  ?> </td>
 <td> <?php echo $res['username'];  ?> </td>

 
 </tr>
 </div>
<?php 
 }
?>
 </table>  

 

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>



    

</body>
</html>