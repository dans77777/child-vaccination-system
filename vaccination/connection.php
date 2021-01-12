<?php
	$dbhost='localhost';
	$dbusr='root';
	$dbpass='';
	$dbname='vaccination';
	$con=new mysqli($dbhost,$dbusr,$dbpass,$dbname)or die("Connection Failed..:" .mysqli_connect_error());?>