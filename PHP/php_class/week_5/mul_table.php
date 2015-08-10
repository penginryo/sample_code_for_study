<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>100 table</title>
	<style>
		td {
			boder: 1px solid #000;
		}
	</style>
</head>
<body>
	<?php 

		function mul(){

			$row = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
			$col = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

			for ($i = 0; $i <= 9 ; $i++) { 
				echo "<tr>
					<th>".$col[$i]."</th>";
					for ($j = 0; $j <= 9; $j++) { 
						echo "<td>".($col[$i] * $row[$j])."</td>";
					}
					echo"</tr>";	
			}
		}

		echo "<table border='1' style='border-collapse:collapse;'>";
			echo "<thead>
						<tr>
							<th>*</th>";
						for ($i=1; $i <= 10 ; $i++) { 
							echo "<th>$i</th>";
						}
						echo "</tr></thead>";
						mul();
					echo "</table>";
	?>
</body>
</html>