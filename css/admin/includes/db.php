<?php

$con = mysqli_connect("localhost:3308","root","","platterly");

if (mysqli_connect_errno()) {
	
	echo "Failed to connect to MySQL :" .mysqli_connect_errno();
}
/*$host = "localhost:3308"; 
$user = "root";
$password = "";
$database = "platterly";

$con = mysqli_connect ($host, $user, $password,$database) or die('Not connected'.mysqli_error());*/
?>