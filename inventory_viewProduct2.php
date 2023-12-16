<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
		body {
		  margin: 0;
		background-color: WhiteSmoke;
			}
		}
		p{text-align:justify;}

		ul {
		  list-style-type: none;
		  margin: 25px;
		  padding: 0;
		  width: 20%;
		  background-color: DimGray;
		  position: fixed;
		  height: 100%;
		  overflow: auto;
		}

		li a {
		  display: block;
		  color: white;
		  padding: 8px 10px;
		  text-decoration: none;
		}

		li a.active {
		  background-color: DarkTurquoise;
		  color: white;
		}

		li a:hover:not(.active) {
		  background-color: #555;
		  color: white;
		}
		.dropdown-content {
 				display: none;
				position: absolute;
  				//min-width: 190px;
  				//box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  				//padding: 12px 15px;
  				//z-index: 10;
				}
		.dropdown:hover .dropdown-content {
 					 display: block;
					}
				#borderimg1 { 
						  border: 10px solid transparent;
						  padding: 15px;
						  border-image: url(border4.png) 20 round;}
					#borderimg2 { 
						  border: 10px solid transparent;
						  padding: 20px;
						  border-image: url(border5.png) 10 round;}
	#frm{  
		border: solid gray 1px;  
		width:30%;  
		border-radius: 2px;  
		margin: 90px auto;  
		background: beige;  
		padding: 50px;  
	}  
	#btn{  
		color: #fff;  
		background: #337ab7;  
		padding: 7px;  
		margin-left: 10%; 
	}
	#btn2{  
		color: #fff;  
		background: #337ab7;  
		padding: 7px;  
		margin-left: 10%; 
	}
		
					</style>
</head>
<body>

<ul>
		  <li style="font-size:2vw;"><a class="active" href="#home"><b><center> Home<center></b></a></li>
		  <li style="font-size:2vw;"><a href="inventory_add_product.php"><i style="font-size:24px" class="fa">&#xf067;</i>    Add product</a></li>
		  <hr><li style="font-size:2vw;"><a href="inventory_view_product.php"><i style='font-size:24px' class='fas'>&#xf46d;</i>   View product<img src="apieegif.gif" style="height:40px;width50px"/></a>
		  <hr><li style="font-size:2vw;"><a href="inventory_update_delete.php"><i style="font-size:24px" class="fa">&#xf044;</i>   Update product</a>
		  <hr><li style="font-size:2vw;"><a href="inventory_report.php"><i style="font-size:24px" class="fa">&#xf200;</i>   Report</a></li><br><hr>
</ul>

<div style="margin-left:23%;padding:1px 16px;height:1000px;">
	<h1  style="text-shadow:2px 4px black;color:white;font-size:3vw;background-color:DarkTurquoise;border:1px inset gray;"><b><i><center><strong>TCE TALLY</strong></center></i></b></h1><hr>
	<!--</div>-->
<div>
<?php

//fetch.php


$con = mysqli_connect('localhost','root','','inventory');  
$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();
$category=$_POST['value'];

if(isset($_POST['submit'])){
  $query = "SELECT * FROM product where category='$category' ORDER BY productID ASC";
}
$rs = mysqli_query($con, $query);

if(!$rs ) 
{
      die('Selection failure: ' . mysql_error());
} 
$row = mysqli_fetch_array($rs);
echo "<center><table style ='
			 border: collapse;
			 margin: 25px 0;
			 font-size: 1em;
			 font-family: sans-serif;
			 min-width: 500px;
			 box-shadow: 0 0 20px rgba(0, 0, 0, 0.16);
			 cellspacing: 20px;' cellspacing=15 cellpadding=15 width=90%	>
			 <tr style='background-color:LightBlue;text-align:center;'><td>Product Name</td><td>Product ID</td><td>Product Quantity</td><td>Product Cost</td></tr>";
while($row)
{
	
	if($row[2] > 5)
	{
    echo "<tr style=background-color:Gainsboro;text-align:center;'><td>$row[0]  </td><td>  $row[1]  </td><td>  $row[2] </td><td>  $row[3] </td></tr> ";
    }
	else
	{
	echo "<tr style=background-color:yellow;text-align:center;color:red;><td><b>$row[0]  </b></td><td><b>  $row[1]  </b></td><td><b>  $row[2] </b></td><td><b>  $row[3] </b></td></tr>";
	}
	$row = mysqli_fetch_array($rs);
}
?>
</center>
</div>

</body>
</html>