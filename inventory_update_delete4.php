<?php
	$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "inventory";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
			$id=$_GET['id'];
			$pname=$_GET['pname'];
			$qty=$_GET['qty'];
			$sname=$_GET['sname'];
	
?>
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
		width:50%;  
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
	<div id="frm">
	<h1><center>UPDATE PRODUCT</center></h1>
	<form action="inventory_update_action.php" method=post name=frm>
	<table cellspacing=15  width=90% style=text-align:center>
		<tr><td>Product id</td><td><input type=text name=pid value='<?php echo $id?>' readonly></td></tr>
		<tr><td>Product Name</td><td><input type=text name=pname value='<?php echo $pname?>' readonly></td></tr>
		<tr><td>Quantity</td><td><input type=text name=qty value='<?php echo $qty?>'></td></tr>
		<tr><td>product Cost</td><td><input type=text name=supplier value='<?php echo $sname?>'></td></tr>
		<tr><td><input type=submit name=submit id=btn value=Update></td><td><input type=reset name=reset id=btn2 value=Cancel></td></tr>
	</table>
	</form>
	</div>
</div>

</body>
</html>
	
