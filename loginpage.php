<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image" href="image/logo.png">
	<link rel="stylesheet" type="text/css" href="loginpage.css">
	<style type="text/css">
		body
		
	</style>
</head>
<body>
	
	<div id="login">
		<div id="login_A">
		</div>
		<div id="login_B">
			<form action="mainpage.php" method="POST">
			<p style="color: white;font-family: Lucida Console;margin-left: 50px;margin-top: 50px;font-size: 30px;">Login<p>
				
				<h4 style="color: white;font-family: Times New Roman;margin-left: 50px;margin-top: 210px;font-size: 20px;">Email</h4>
				<input type="email" name="username" style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 20px;background-color: black;border:black;border-bottom: 2px solid white;outline:none;">
				
				<h4 style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 20px;">Password</h4>
				<input type="password" name="pass" style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 20px;background-color: black;border:black;border-bottom: 2px solid white;outline:none;">
				
				<input type="submit" name="Submit" style="font-family: Times New Roman;cursor:pointer;margin-left: 50px;font-size: 20px;margin-top: 10px;border-radius: 10px;outline:none;">
				
				<button type="button" onclick="location.href='register.php';" style="font-family: Times New Roman;margin-left: 50px;font-size: 20px;margin-top: 10px;border-radius: 10px;cursor: pointer;outline:none;">Register</a> </button>
								</form>


		</div>

	</div>
</body>
</html>