<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>prime</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$checkPrime = 7;

		function primeNumber($num){
			$isPrime = true;
			if($num > 3){
				for ($i = 2; $i <= $num-1; $i++){ 
					if ($num % $i == 0) {
						$isPrime = false;
						break;
					}
				}
			}
			return $isPrime;
		}

		function getFivePrime($num){
			$cnt = 0;
			while ($cnt < 5) {
				if(primeNumber($num)){
					echo $num."<br>";
					$cnt++;
				}
				$num++;
			}
		}

		// primeNumber($isPrime);
		getFivePrime($checkPrime);

	 ?>
</body>
</html>