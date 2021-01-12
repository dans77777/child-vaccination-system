<?php
session_start();
include('connection.php');

$PID= $_SESSION['PID'];
echo $PID;
echo 'hello world';
//$q = " DELETE FROM vaccine1 WHERE `VID` = $VID ";
$qe='delete from parent1 where PID="'.$PID.'"';

if( mysqli_query($con,$qe))
{
echo 'success';

}
else{
    echo $con->error;
}
mysqli_error($con);

//header('location:newhome.php');

?>