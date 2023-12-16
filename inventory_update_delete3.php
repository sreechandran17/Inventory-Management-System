<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
</body>
</html> 
<?php  
  
$conn = mysqli_connect('localhost','root','','inventory');  
if(!$conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  


$sql = "select * from product";
$rs = mysqli_query($conn, $sql);

if(!$rs ) 
{
      die('Selection failure: ' . mysql_error());
}

$row = mysqli_fetch_array($rs);
//echo "<h1 style='text-shadow:2px 2px blue;color:white;font-size:3vw;background-color:Coral;border:1px inset gray;'><b><i><center><strong>TCE TALLY</strong></center></i></b></h1><hr>";
echo "<table style ='
			 border: collapse;
			 margin: 25px 0;
			 font-size: 1em;
			 font-family: sans-serif;
			 min-width: 500px;
			 box-shadow: 0 0 20px rgba(0, 0, 0, 0.16);
			 cellspacing: 20px;' cellspacing=15 cellpadding=15 width=90%	>
			 <tr style='background-color:LightBlue;text-align:center;'><td>Product Name</td><td>Product ID</td><td>Product Quantity</td><td>Supplier</td><td colspan=1>Action</td></tr>";
while($row)
{
    echo "<tr style=background-color:Gainsboro;text-align:center;'><td>$row[0]  </td><td>  $row[1]  </td><td>  $row[2] </td><td>  $row[3] </td><td><a href=inventory_update_delete4.php?pname=$row[0]&id=$row[1]&qty=$row[2]&sname=$row[3]><i class='fa fa-edit' style='font-size:35px;color:DarkSlateBlue '></i></a></td></tr> ";
    $row = mysqli_fetch_array($rs);
}
mysqli_close($conn);
?>  