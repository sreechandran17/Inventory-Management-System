<!DOCTYPE html>
<html>
<head>  
    <title>PHP registration system</title>  
	<style>
	body {
			background-image: url('login5_inventory.jpeg');
			background-repeat: no-repeat;
			background-attachment: fixed;  
			background-size: cover;
		}
	#frm{  
		border: solid gray 1px;  
		width:20%;  
		border-radius: 1px;  
		margin: 70px auto;  
		background: beige;  
		padding: 50px;  
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
<center><h1 style="color:LightGray;text-shadow:2px 2px 5px violet;font-size:5vw;">TCE TALLY</H1></center>
<div id = "frm">
<h1><center>Registration</center></h1> 
<form action="create_account.php" name = "f1" method=POST onsubmit = "return validation()" >
  <b style="font-size:1.5vw;">User ID:</b><br><br>
	<center><input type="text" id="userid" name="userid" placeholder="your ID here" pattern="TTU[0-9]{3}" title="Should starts with 'TTU' followed by three positive numbers"></center><br><br>
  <b style="font-size:1.5vw;">Password:<b><br><br>
	<center><input type="password" id="password" name="password" placeholder="Your password here" pattern="[a-zA-Z]+(@+[1-9]+[a-zA-Z]+)" title="Should start with alphabet followed by any numbers, alphabets and special character @"></center><br><br>
	
	<center><input type="submit" name="register" id = "btn2" value="Create Account"></center>
</form> 
</div>
<script>  
            function validation()  
            {  
                var id=document.f1.userid.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User ID and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User ID is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
		
		
		

</body>
</html>
