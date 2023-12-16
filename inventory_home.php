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
		  background-color: DimGray;
		  color: white;
		}
		.dropdown-content {
 				display: none;
				position: absolute;
  				min-width: 190px;
  				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  				padding: 12px 15px;
  				z-index: 10;
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
		.styled-table {
				border-collapse: collapse;
				margin: 25px 0;
				font-size: 0.9em;
				font-family: sans-serif;
				min-width: 400px;
				box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
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
	<h1  style="text-shadow:2px 3px gray;color:white;font-size:3vw;background-color:DarkTurquoise;border:1px inset gray;"><b><center><strong>TCE TALLY</strong></center></b></h1><hr>
	<h1 style="text-shadow:2px 2px green;"><center>About us</center></h1>
	<h2 style="line-height:2.4;text-align:justify;"><center><i>This mix pretty much sums up what inventory management software can do for your business.<br>Whether you’re running a brick and mortar store, an eCommerce site, a supermarket, or a logistics company, an inventory management system is a must-have. It will give you insights into every aspect of your products, and in some cases, will help you better understand your customers too.</i></center></h2>
	<center><table cellspacing=15 cellpadding=15 width=60%><tr><td><a href="inventory_add_product.php"><img src='add.jpeg' width="100" height="100"></a></td><td><a href="inventory_update_delete.php"><img src="update.jpeg" width="100" height="100"></a></td><td><a href="inventory_view_product.php"><img src="view.jpeg" width="100" height="100"></a></td><td><a href="inventory_report.php"><img src="report.jpeg" width="100" height="100"></a></td></tr></table></center>
</div>

</body>
</html>
