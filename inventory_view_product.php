<!DOCTYPE html>
<html>
 <head>
  <title>AngularJS Live Data Search using PHP Mysql</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
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

<div style="margin-left:23%;padding:1px 16px;height:100px;">
	<!--//<div class="dropdown">-->
	<h1  style="text-shadow:2px 4px black;color:white;font-size:3vw;background-color:DarkTurquoise;border:1px inset gray;"><b><i><center><strong>TCE TALLY</strong></center></i></b></h1><hr>
	<!--</div>-->
	<div class="container" ng-app="live_search_app" ng-controller="live_search_controller" ng-init="fetchData()">
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon" >Search</span>
     <input type="text" name="search_query" ng-model="search_query" ng-keyup="fetchData()" placeholder="Search" class="form-control" />
    </div>
   </div>
   
<br>
   <br />
   <table style='color:black' class="table table-striped table-bordered" >
    <thead>
     <tr>
      <th>Product Name</th>
      <th>Product ID</th>
      <th>Product Quantity</th>
      <th>Product Cost</th>
     </tr>
    </thead>
    <tbody style='color:black'>
     <tr ng-repeat="data in searchData">
      <td style='color:black'>{{ data.productName }}</td>
      <td>{{ data.productID }}</td>
      <td>{{ data.productQuantity }}</td>
      <td>{{ data.productCost }}</td>
     </tr>
    </tbody>
   </table>
  </div>
  <form method="POST" action="inventory_viewProduct2.php">
  <select name="value">
            <option name='category' value="stationery">Filter by category</option>
            <option name='category' value="stationery">stationery</option>
            <option name='category' value="dairy">dairy</option>
            <option name="category" value="Cosmetics">Cosmetics</option>
            <option name="category" value="cooking essentials">cooking essentials</option>
            <option name="category" value="daily essentials">daily essentials</option>
            <option name="category" value="hygiene">hygiene</option>
            <option name="category" value="DryFruits">DryFruits</option>
  </select>
  <input type="submit" name="submit" /> 
  
</form>
</div>
  
  
 </body>
</html>

<script>
var app = angular.module('live_search_app', []);
app.controller('live_search_controller', function($scope, $http){
 $scope.fetchData = function(){
  $http({
   method:"POST",
   url:"inventory_viewProduct.php",
   data:{search_query:$scope.search_query}
  }).success(function(data){
   $scope.searchData = data;
  });
 };
});
</script>