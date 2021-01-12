<?php
session_start();
include('connection.php');

$HID= $_SESSION['HID'];
echo $HID;
echo 'hello world';
//$q = " DELETE FROM vaccine1 WHERE `VID` = $VID ";
$qe='delete from hospital1 where HID="'.$HID.'"';

if( mysqli_query($con,$qe))
{
echo 'success';

}
else{
    echo $con->error;
}
mysqli_error($con);

header('location:newhome.php');

?>