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
		$num = 30;
		$ans;

		if($num % 2 == 0){
			echo "number is even<br>";
		} else {
			echo "number is odd<br>";
		}


		if($num > 20){
			$ans = $num + 20;
		} elseif($num > 40){
			$ans = $num + 40;
		} elseif($num > 60){
			$ans = $num + 60;
		} elseif($num > 80){
			$ans = 80 / $num;
		} else {
			echo "too small";
		}
		echo "answer -> ".$ans;


		/////////////
		// Ryo Makabe
		/////////////
	 ?>
</body>
</html>