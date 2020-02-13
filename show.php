

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image" href="image/logo.png">
	<link rel="stylesheet" type="text/css" href="show.css">
	<style type="text/css">
		body
		
	</style>
</head>
<body>
	<div id="login">
		
		<div id="title" style="background-color:white;height: 50px;width: 600px;margin:auto;font-size: 30px;text-align: center;border-radius: 10px 10px 0px 0px ;color: black;">
			
<?php
$text=$_POST['text'];
echo $text;
?>

		</div>


		<div id="image" style="background-color:white;height: 300px;width: 600px;margin:auto;font-size: 30px;text-align: center;margin-top: 10px;">
			

				<?php		

if(isset($_POST['submit']))
{ 
$filepath = "photo/" . $_FILES["coverimg"]["name"];
 
if(move_uploaded_file($_FILES["coverimg"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=300 width=400/>";
} 
else 
{
echo "Error !!";
}
} 
?>

		</div>



				<div id="description" style="background-color: white;height:279px;width: 590px;margin:auto;font-size: 30px;text-align: justify;border-radius: 0px 0px 10px 0px;margin-top: 10px;font-size: 25px;margin-left: 10px;font-family: Comic Sans MS;color: black;">
					<?php
						$texts=$_POST['texts'];
						echo $texts;

?>

</div>
	</div>
</body>
</html>