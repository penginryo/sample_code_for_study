<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$myFile = fopen("fruit.txt", "r") or die("Unable to open file");
		while(!feof($myFile)){
			echo fgetc($myFile)."<br>";
		}
		fclose($myFile);
	 ?>
</body>
</html>