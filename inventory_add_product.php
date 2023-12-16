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
		width:60%;  
		border-radius: 2px;  
		margin: 90px auto;  
		background: #D3D3D3;  
		padding: 30px;  
	}  
	#btn{  
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
	<!--//<div class="dropdown">-->
	<h1  style="text-shadow:2px 4px black;color:white;font-size:3vw;background-color:DarkTurquoise;border:1px inset gray;"><b><i><center><strong>TCE TALLY</strong></center></i></b></h1><hr>
	<!--</div>-->
	<div >  
    <!--<h1><center>ADD PRODUCT</center></h1> -->
	<div id="frm">
	<center>
	<i style="font-size:30px" class="fa">&#xf044;</i> 
	<table style="height:100px;width:100px">
	<th style="height:100px;width:100px">
	<form name="f3" action = "add_product.php" method = "POST" onsubmit = "return validation()">  
           <p>  
                
				<center><input type="text" id="pname" name="pname" size="40px" style="height:25px;border-radius:15px" placeholder="Product name here"></center><br>
            </p>  
            <p>  
                
				<center><input type="text" id="pid" name="pid" size="40px" style="height:25px;border-radius:15px" placeholder="Product ID here" pattern="TT[0-9]{3}" title="Should starts with 'TT' followed by three positive numbers"></center><br>  
            </p> 
			<p>
            
            <center>
            <select name="value" style="height:25px;border-radius:15px;width: 300px;">
            <option name='category' value="stationery">stationery</option>
            <option name='category' value="dairy">dairy</option>
            <option name="category" value="Cosmetics">Cosmetics</option>
            <option name="category" value="cooking essentials">cooking essentials</option>
            <option name="category" value="daily essentials">daily essentials</option>
            <option name="category" value="hygiene">hygiene</option>
            <option name="category" value="DryFruits">DryFruits</option>
            </select>
            </center><br>
            </p>
			<p>  
				<center><input type="number" id="pq" name="pq" size="40px" style="height:25px;width: 22em;border-radius:15px" placeholder="Product quantity here" ></center><br>
            </p>
			<p>  
				<center><input type="number" id="sname" name="sname" size="40px" style="height:25px;width: 22em;border-radius:15px" placeholder="Product cost here" ></center><br>  
            </p>
            <p>     
                <center><button id="btn">Add product</button></center>  <br><br>
            </p>  
        </form> </th></tr></table></center></div>
    </div>   
    <script>  
			
            function validation()  
            {  
                var pn=document.f3.pname.value;  
                var pID=document.f3.pid.value;  
				var pq=document.f3.pq.value;
				var sn=document.f3.sname.value;
				
                if(pn.length=="" && pID.length=="" && pq == 0 && sn.length == "") {  
                    alert("Fields are valid");  
                    return false;  
                }  
                else  
                {  
                    if(pn.length=="") {  
                        alert("Product name is empty");  
                        return false;  
                    }   
                    if (pID.length=="") {  
                    alert("Product ID is empty");  
                    return false;  
                    }  
					if(pq.length==0) {  
                        alert("Product quantity is not mentioned");  
                        return false;  
                    }
					if(sn.length==0) {  
                        alert("Product cost is empty");  
                        return false;  
                    }
                }                             
            }  
        </script>  
</div>

</body>
</html>
