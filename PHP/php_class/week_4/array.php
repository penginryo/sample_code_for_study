<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>array</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$food = array("Sushi", "Avocado", "Bagels", "Chapche", "Salmon", "Pizza");

		print_r($food);
		echo "<br>";
		echo count($food)."<br>";
		echo $food[2]."<br>";

		echo "<hr>";

		function isWeekend($day){
			if ($day == "Saturday" || $day == "Sunday") {
				echo $day." is weekend!!!!!!WOOOFOOOOO!!!!!!!!!!!<br><br>";
			} else {
				echo $day." is weekday<br><br>";
			}
		}

		$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

		for($i = 0; $i < count($week); $i++){
			isWeekend($week[$i]);
		}
	 ?>
</body>
</html>