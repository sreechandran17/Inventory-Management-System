<?php
			$id = $_POST['pid'];
			$pname = $_POST['pname'];
			$qty = $_POST['qty'];
			$sname = $_POST['supplier'];
			include('connection.php');
			
			
				$sql = "update product set productQuantity=$qty,productCost=$sname where productID = '$id'";
				if(!mysqli_query($con,$sql))
				{
					echo "Not Updated Successfully".mysqli_error($con);
				}
				else
				{
					header('location:inventory_update_delete.php');
				}
			
?>