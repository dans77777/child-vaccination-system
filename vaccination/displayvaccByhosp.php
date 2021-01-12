<?php

include('connection.php');
include('HospPage.php');
$HID = $_GET['HID'];
echo $HID;
echo 'hello world';
//$q = " DELETE FROM vaccine1 WHERE `VID` = $VID ";
$qe='select * from vaccine1 where HID="'.$HID.'"';

if( mysqli_query($con,$qe))
{
echo 'success';

}
else{
    echo $con->error;
}
mysqli_error($con);

header('location:HospPage.php');

?>