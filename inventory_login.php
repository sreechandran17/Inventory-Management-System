<html>  
<head>  
    <title>PHP login system</title>  
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
		border-radius: 0.5px;  
		margin: 40px auto;  
		background: beige;  
		padding: 20px;  
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
	<center><h1 style="color:LightGray;text-shadow:2px 2px 5px violet;font-size:5vw;">TCE TALLY</H1></center>
    <div id = "frm">  
        <h1><center>Login</center></h1>  
        <form name="f1" action = "authentication.php" method = "POST" >  
            <p>  
                <b style="font-size:1.5vw;">User ID:</b><br>
				<center><input type="text" id="userid" name="userid" placeholder="your ID here"></center><br>
            </p>  
            <p>  
                <b style="font-size:1.5vw;">Password:</b><br>
				<center><input type="password" id="password" name="password" placeholder="Your password here" ></center><br><br>  
            </p>  
            <p>     
                <center><input type =  "submit" name = "login" id = "btn" value = "Login" /></center>  <br><br>
				<center><input type = "submit" name= "registration" id = "btn2" value = "Create account" ></center>
            </p>  
        </form>  
    </div>   
    <script>  
			
            function validation()  
            {  
                var id=document.f1.userid.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
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
