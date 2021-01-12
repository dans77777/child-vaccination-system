<?php

include('connection.php');

$VID = $_GET['VID'];
echo $VID;
echo 'hello world';
//$q = " DELETE FROM vaccine1 WHERE `VID` = $VID ";
$qe='delete from vaccine1 where VID="'.$VID.'"';

if( mysqli_query($con,$qe))
{
echo 'success';

}
else{
    echo $con->error;
}
mysqli_error($con);

header('location:vaccinedetails.php');

?>