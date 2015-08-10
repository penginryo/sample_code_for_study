<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Random Number Table</title>
	<style>

		body {
			font-size: 18px;
			font-family: Helvetica, sans-serif;
		}

		table {
			border-collapse: collapse;
			text-align: char;
		}

		th {
			font-size: 21px;
			width: 150px;
			text-align: center;
			padding: 10px 10px;
			background-color: #beb9b5;
		}

		.col {
			background-color: #ded9d5;
		}

		td {
			width: 120px;
			text-align: center;
			padding: 10px;
		}

		tr:nth-child(even){
			background-color: #96C0CE;
		}
		
		tr:nth-child(odd){
			background-color: #AAD6E6;
		}

	</style>
</head>
<body>
	<?php

		//open or create a file named random.txt
		$file = fopen("random.txt", "c+") or die("unable to open the file");

		for($i = 0; $i <10; $i++){
			//generate 10 numbers from 1 to 30
			$randNum = rand(1, 30);
			fwrite($file, $randNum."\n");
		}

		//back to the top of the file
		rewind($file);

		$numArray = array();

		while(!feof($file)){
			//get one line of number from random.txt
			$storedNum = fgets($file);
			//ignore the last line, line break
			if ($storedNum == "") {
				break;
			}
			//push a numbe from random.txt to array($numArray)
			array_push($numArray, $storedNum);
		}

		//sort the array order by number
		asort($numArray, SORT_NUMERIC);

		$sortedFile = fopen("sorted.txt", "c+") or die("unable to open the file");

		//write sorted numbers in sorted.txt
		foreach ($numArray as $data) {
			fputs($sortedFile, $data);
		}

		rewind($sortedFile);
		$sum = 0;

		while(!feof($sortedFile)){
			//get one nuumber from sortedFile
			$rtvNum = fgets($sortedFile);
			//check if it's a number or blank
			if ($rtvNum == "") {
				break;
			}
			$sum += intval($rtvNum);
		}

		//print sum
		echo "<br>sum -> ".$sum;

		//one function for all four expressions
		//judge by second argument, $expression
		function calc($num, $expression){
			echo "<tr>
						<th class='col'>$expression</th>";
			for($i = 1; $i <= 10; $i++){
				switch ($expression) {
					case 'add':
						echo "<td>".($num+$i)."</td>";
						break;

					case 'sub':
						echo "<td>".($num-$i)."</td>";
						break;

					case 'mul':
						echo "<td>".($num*$i)."</td>";
						break;

					case 'div':
						echo "<td>".round(($num/$i), 1)."</td>";
						break;
					
					default:
						echo "error";
						break;
				}
			}
			echo "</tr>";
		}

		echo "<table>
						<tr><th>#</th>";
							for($i = 1; $i <= 10; $i++){
								echo "<th>$i</th>";
							}
						echo "</tr>";
						
						calc($sum, "add");
						calc($sum, "sub");
						calc($sum, "mul");
						calc($sum, "div");

		echo "</table>";

		fclose($sortedFile);
		fclose($file);
	 ?>
</body>
</html>
