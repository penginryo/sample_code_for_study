<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>constant</title>
	<style>
		table {
			border-collapse: collapse;
		}
		td {
			border: 1px solid #000;
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php 
		define("NUM1", 10);
		define("NUM2", 20);
		define("NUM3", 5);

		function sum($num1, $num2){
			return $num1 + $num2;
		}
		function sub($num1, $num2){
			return $mum1 - $num2;	
		}
		function mul($num1, $num2){
			return $num1 * $num2;
		}
		function div($num1, $num2){
			return $num1 / $num2;
		}
		function mod($num1, $num2){
			return $num1 % $num2;
		}

		echo "<table>
				<tr>
					<td> </td><td>+</td><td>-</td><td>%</td><td>/</td><td>*</td>
				</tr>
				<tr>
					<td>X:".x1."<br/>Y:".y1."</td>
					<td>".sum(NUM1, NUM2)."</td>
					<td>".sub(NUM1, NUM2)."</td>
					<td>".mod(NUM1, NUM2)."</td>
					<td>".div(NUM1, NUM2)."</td>
					<td>".mul(NUM1, NUM2)."</td>
				</tr>
				<tr>
					<td>X:".x1."<br/>Z:".z1."</td>
					<td>".sum(NUM1, NUM3)."</td>
					<td>".sub(NUM1, NUM3)."</td>
					<td>".mod(NUM1, NUM3)."</td>
					<td>".div(NUM1, NUM3)."</td>
					<td>".mul(NUM1, NUM3)."</td>
				</tr>
		</table>";
	 ?>
</body>
</html>