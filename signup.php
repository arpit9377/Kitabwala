

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KitabWala | Sign Up</title>
	<link rel='stylesheet' type='text/css' href='style.css' />
</head>
<style>
	#bar{
	height: 100px;
	background-color: rgb(49, 52, 182);
	color: #d9dfeb;
	padding: 4px;

	
}
#title{
	font-size: 40px;
}
#signupbtn{
	background-color: #42b72a;
	width: 70px;
	text-align: center;
	padding: 4px;
	border-radius: 4px;
	float: right; 

}
#bar2{
	
	width: 800px;
	height: 500px;
	background-color: white;
	margin: auto;
	margin-top: 80px;
	padding: 0;
	padding-top: 40px;
	text-align: center;
	font-weight: bold;
}
#text{
	height:40px;
	width:300px ;
	border-radius:4px ;
	border: solid 1px #ccc;
	padding: 4px;
	font-size: 14px;
}
#button{
	height:40px;
	width:300px ;
	border-radius:4px ;
	border-radius: none;
	border: none;
	background-color: rgb(49, 52, 182);
	font-weight: bold;
    color: white;
}

</style>
<body style="font-family: tahoma; background-color: #e9ebee;">
	<div id="bar">
		<div id="title">
			KitabWala                                                         
			
		</div>
		<div id="signupbtn">
			<button><a href="login.php">Log in</a></button>
		</div>
		</div>
		<div id="bar2">
			
			Sign Up <br><br>
				<form action="signupaction.php" method="POST" >

				<input name="name" type="text" id="text" placeholder= "Name"><br><br>
				<input name="email" type="text" id="text" placeholder="Email"><br><br>
				<input name="password" type="password" id="text" placeholder="Password"><br><br>
				
				<input name="branch" type="text" id="text" placeholder="Branch"><br><br>
				<input name="college" type="text" id="text" placeholder="College"><br><br>

				<input type="submit" id="button" value="Sign Up"><br>
				
				</form>



			
		</div>
     
</body>
</html>