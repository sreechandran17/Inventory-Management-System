<?php
$id	= $_POST["userid"];
$pass= $_POST["password"];
$con = mysqli_connect('localhost' , 'root', '', 'inventory');

if(!$con)
	echo "Connection failed".mysqli_error();

$sql = "insert into registration values('$id','$pass')";

if(!mysqli_query($con,$sql))
	echo "Connection failed".mysqli_error();
else
	header('location:inventory_login.php');
?>
'