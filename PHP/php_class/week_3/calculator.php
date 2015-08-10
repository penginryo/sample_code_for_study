<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calculator</title>
	<style>

		body {
			font-family: Arial;
			font-size: 1.0em;
		}
		input#box {
			width: 50px;
			height: 20px;
			font-size: 0.8em;
		}
		input.button {
			margin: 5px 0;
			padding: 5px 10px;
    		font-size: 1.0em;
		}
	</style>
</head>
<body>

	<?php

		$input1 = $_POST["input1"];
		$input2 = $_POST["input2"];
		$result = 0;
		$operation = $_POST["operation"];

		if($operation == "+"){
			$result = add($input1, $input2);
		} elseif ($operation == "-") {
			$result = sub($input1, $input2);
		} elseif ($operation == "*") {
			$result = mul($input1, $input2);
		} else{
			$result = div($input1, $input2);
		}

		function add($num1, $num2){
			return $num1 + $num2;
		}

		function sub($num1, $num2){
			return $num1 - $num2;
		}

		function mul($num1, $num2){
			return $num1 * $num2;
		}
		function div($num1, $num2){
			return $num1 / $num2;
		}

	?>
		<form name='calc' method='POST' action='calculator.php'>
				First Value  : <input id='box' name='input1' type='text'><br>
				
				<select name="operation">
					<option name="add">+</option>
					<option name="sub">-</option>
					<option name="mul">*</option>
					<option name="div">/</option>
				</select><br>
				
				Second Value : <input id='box' name='input2' type='text'><br>
				<input class="button" type="submit" value="calculate"><br>
				Answer : <input id="box" type="text" name="result" value="<?php echo $result; ?>">
		</form> 
</body>
</html>