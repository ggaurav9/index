<?php
session_start();
if(isset($_POST['cover_up']))
{

$imgFile = $_FILES['coverimg']['name'];
$tmp_dir = $_FILES['coverimg']['tmp_name'];
$imgSize = $_FILES['coverimg']['size'];

if(!empty($imgFile))
{

$upload_dir = 'image/'; // upload directory

$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

// valid image extensions
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

// rename uploading image
$coverpic = rand(1000,1000000).".".$imgExt;

// allow valid image file formats
if(in_array($imgExt, $valid_extensions))
{
// Check file size '5MB'
if($imgSize < 5000000)
{
move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
echo "uploading Done";
}
else{
$errMSG = "Sorry, your file is too large.";
}
}
else{
$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image" href="">
	<link rel="stylesheet" type="text/css" href="createpage.css">
	<style type="text/css">
		body
		
	</style>
</head>
<body>
	
	<div id="login_main">
		<div id="login_inside">
			<br>
			<form action="show.php" method="post" enctype="multipart/form-data">
			
			<h1 style="color: black;font-family: Times New Roman;">Create New Blog</h1>
			
			<h4 style="color: black;font-family: Times New Roman;font-size: 20px">Title:</h4>
			
				<input type="text" name="text" placeholder="      Title  " style="color: black;font-family: Times New Roman;font-size: 20px;border:black;border-bottom: 2px solid grey;outline:none;width: 600px;border-radius: 0px 10px 10px 0px;">
				

				<h4 style="color: black;font-family: Times New Roman;font-size: 20px">Image URL:</h4>
				<input type="file" name="coverimg"  style="color: black;font-family: Times New Roman;font-size: 20px;border-bottom: 2px solid grey;outline:none;width: 600px;border-radius: 0px 10px 10px 0px;background-color: white;">

				<h4 style="color: black;font-family: Times New Roman;font-size: 20px">Discription:</h4>
				<textarea type="texts" name="texts" rows="6" cols="53" placeholder="Please write your opinion in the section bellow" 					style="float:left; opacity:.9; resize:none;  outline:none; border-bottom: 2px solid grey;font-size:20px;border-radius: 0px 10px 10px 0px;"maxlength="100"></textarea>
				<input type="submit" name="submit" value="Create" style="font-family: Times New Roman;cursor:pointer;font-size: 20px;margin-top: 160px;border-radius: 10px;outline:none;margin-left: -590px;">
					</form>
		</div>


		
	</div>
</body>
</html>