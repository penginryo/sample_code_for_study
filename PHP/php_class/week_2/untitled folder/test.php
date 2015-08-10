<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Coolink Lessons</title>
	<style>
		td {
			padding: 10px 0 0 15px;
			text-align: right;
		}
		tr {
			background-color: #D9FFC9;
		}
		tr:nth-child(even) {
			background-color: #C9F4FF;
		}
		th {
			text-align: right;
			background-color: #BDBDBD;
		}
	</style>
</head>
<body>
	<?php 

		$food = "Omlet";

		echo "<h1>$food</h1>
				<h2>ingredients</h2>
				<ul>
					<li>egg</li>
					<li>oil</li>
					<li>tomato</li>
					<li>salt & papper</li>
				</ul>
				<h2>Instruction</h2>
				<ol>
					<li>heat the pan</li>
					<li>put oil on the pan</li>
					<li>mix all ingredients</li>
					<li>place it on your favourite plate</li>
					<li>done!</li>
				</ol>";

			echo "<hr/>";

			$num = 3;

			$firstName1 = "Keisuke";
			$firstName2 = "Tomoko";
			$firstName3 = "Yutaka";

			$lastName1 = "Yamashita";
			$lastName2 = "Harada";
			$lastName3 = "Tsuchida";

			echo "<h3>Group $num</h3>";
			
			echo "<em>$firstName1</em>"." <strong>$lastName1</strong><br>";
			echo "<em>$firstName2</em>"." <strong>$lastName2</strong><br>";
			echo "<em>$firstName3</em>"." <strong>$lastName3</strong><br>";

			echo "<hr/>";

			echo "<table border='1' style='border-collapse:collapse;'>";
			echo "<thead>
						<tr>
							<th>*</th>";
						for ($i=1; $i <= 10 ; $i++) { 
							echo "<th>$i</th>";
						}
						echo "</tr></thead>";
					
						for ($col=1; $col <= 10 ; $col++) { 
							echo "<tr>
									<th>$col</th>";
							for ($row=1; $row <=10; $row++) { 
								echo "<td>".($col*$row)."</td>";
							}
							echo"</tr>";	
						}
					echo "</table>";
	 ?>
</body>
</html>