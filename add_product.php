<?php
$pname1	= $_POST["pname"];
$pid1= $_POST["pid"];
$category=$_POST['value'];

$pq1= $_POST["pq"];

$sname1= $_POST["sname"];

$con = mysqli_connect('localhost' , 'root', '', 'inventory');

if(!$con)
	echo "Connection failed".mysqli_error();

$sql = "insert into product values('$pname1','$pid1',$pq1,$sname1,'$category');";
if(!mysqli_query($con,$sql))
	echo "Connection failed".mysqli_error();
else
{
	header('location:inventory_add_product.php');
}
?>
