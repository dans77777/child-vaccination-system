<html>
<link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>

<?php
session_start();
$CID=$_SESSION['CID'];



include('connection.php');

$qry=mysqli_query($con,'select *  from child1  where CID="'.$CID.'"');

	echo"<table border=2 style='margin-top:3%;width:70%' class='table' >";
	echo "<tr><td colspan=12><h1>Child details</h1></tr>";
	
			if(mysqli_num_rows($qry)>=1)
{
		echo"<font color=green><center><tr>
		<td>CID</td>  
		<td>Name</td>
		<td>Gender</td>
		<td>area</td>
		<td>streetNo</td>
		<td>city</td>
		<td>DOB</td>
		<td>weight_in_kg</td>
		<td>recommnded vaccine date</td>
		<td>HID</td>
		<td>username</td>
		</font>
		</tr></center>";
		

		while($r=mysqli_fetch_array($qry))
		{

			
						echo"<center><tr>
						<td>$r[CID]</td>
						<td>$r[name]</td>
						<td>$r[Gender]</td>
						<td>$r[area]</td>
						<td>$r[streetNo]</td>
						<td>$r[city]</td>
						<td>$r[DOB]</td>
						<td>$r[weigh_in_Kg]</td>
						<td>$r[reccomnded_vacc_date]</td>
						<td>$r[HID]</td>
						<td>$r[usename]</td>
										
						</tr> </center>";
					
		}
		echo "</table>";

}		

	
		
?>
