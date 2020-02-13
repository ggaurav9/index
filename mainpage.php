<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="icon" type="image" href="image/logo.png">
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<style type="text/css">
		body
		
	</style>
</head>
<body>
	<div id="mainfront">

		<div id="circle" onclick="location.href='mainpage.php';" >
			<p style="margin-left: 25px;margin-top: 40px;cursor:pointer;font-family: Times New Roman;">HOME</p>
		</div>

		<div id="circle" onclick="location.href='createpage.php';" >
			<p style="margin-left: 22px;margin-top: 28px;cursor:pointer;margin: center;font-family: Times New Roman;">CREATE BLOG</p>
		</div>

		<div id="circle" onclick="location.href='logout.php';" >
			<p style="margin-left: 20px;margin-top: 40px;cursor:pointer;font-family: Times New Roman;">LOGOUT</p>
		</div>

		<div id="circle_a">
			<h2 style="margin-left: 170px;font-family:Lucida Handwriting;font-size: 40px;margin-top: 60px;">BLOGS</h2><br/>
			<h4 style="margin-left: 35px;font-family:Lucida Handwriting;">A blog is an online journal or informational website displaying information in the reverse chronological order, with the latest posts appearing first. It is a platform where a writer or even a group of writers share their views on an individual subject.</h4>
		</div>
				
	</div>
	
	
</body>	
</html>