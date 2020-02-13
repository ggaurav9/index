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
	<script>
		function myfun()
		{
			document.getElementByID("demo").innerHTML = "reg.hph";
		}

	</script>
	<div id="login">
		<div id="login_A">
		</div>
		<div id="login_B">
			<form action="loginpage.php" method="POST">
			<p style="color: white;font-family: Lucida Console;margin-left: 50px;margin-top: 50px;font-size: 30px;">Registration Info<p>
				<h4 style="color: white;font-family: Times New Roman;margin-left: 50px;margin-top: 30px;font-size: 12px;">Name</h4>
				<input type="text" name="name" style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 20px;background-color: black;border:black;border-bottom: 2px solid white;outline:none;">


				<h2 style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 12px;">BirthDate</h2>
				<input type="date" name="date" style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 12px;width: 240px;background-color: black;border:black;border-bottom: 2px solid white;outline:none;margin-top: 20px;">
				<h2 style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 12px;">Gender</h2>
				<select  style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 12px;background-color: black;border:black;border-bottom: 2px solid white;outline:none;width: 240px;">
					<option style="margin-top: 10px;"></option>
					<option>Male</option>
					<option>Female</option>
				</select><br/>

				<h2 style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 12px;">Email</h2>
				<input type="Email" name="Email" style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 20px;background-color: black;border:black;border-bottom: 2px solid white;outline:none;"><br/>

				<h4 style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 12px;">Password</h4>
				<input type="password" name="pass" style="color: white;font-family: Times New Roman;margin-left: 50px;font-size: 12px;background-color: black;border:black;border-bottom: 2px solid white;outline:none;width: 240px;"><br/>

				<input type="submit" name="Submit" style="font-family: Times New Roman;cursor:pointer;margin-left: 50px;font-size: 20px;margin-top:30px;border-radius: 10px;outline:none;">
								</form>
		</div>

	</div>
</body>
</html>