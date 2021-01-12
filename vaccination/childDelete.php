<?php

include('connection.php');
session_start();
$CID = $_SESSION['CID'];

echo 'hello world';
//$q = " DELETE FROM vaccine1 WHERE `VID` = $VID ";
$qe='delete from child1 where CID="'.$CID.'"';

if( mysqli_query($con,$qe))
{
echo 'success';

}
else{
    echo $con->error;
}
mysqli_error($con);

header('location:childpage.php');

?>