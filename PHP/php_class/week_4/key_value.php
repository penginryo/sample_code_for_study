<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		table {
			border: 1px solid #000;
			border-collapse: collapse;
		}
		th {
			border: 1px solid #000;
		}
		td {
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<?php 

		$name = ["1" => "Jana", "2" => "Barack"];
		$lastName = ["1" => "Behfarshad", "2" => "Obama"];

		echo "<table>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>";

			for($i = 1; $i < count($name)+1; $i++){
				echo "<tr>
						<td>".$name[$i]."</td>
						<td>".$lastName[$i]."</td>
					</tr>";				
			}

			echo "</table";
		

	 ?>
</body>
</html>