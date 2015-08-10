<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Multi Dimension Array Assignment</title>
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
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
	<h1>Sales Table</h1>
	<?php 

		$desk = array("name" => "desk", "price" => 69, "mSale" => 3450);
		$chair = array("name" => "chair", "price" => 29, "mSale" => 1450);
		$lamp = array("name" => "lamp", "price" => 45, "mSale" => 2250);
		$sofa = array("name" => "sofa", "price" => 239, "mSale" => 11950);
		$bed = array("name" => "bed", "price" => 189, "mSale" => 9450);

		$item = array('1' => $desk, '2' => $chair, '3' => $lamp, '4' => $sofa, '5' => $bed);

		function _yearlySale($mSale){
			return $mSale * 12;
		}

		function _netProfit($sale){
			$net = $sale - ($sale * 0.12);
			return $net;
		}

		echo "<table>
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Monthly Sale</th>
					<th>Yearly Sale</th>
					<th>Net Profit</th>
				</tr>";

			for($i = 1; $i <= 5; $i++){
				echo "<tr>
						<td>$i</td>
						<td>".$item[$i][name]."</td>
						<td>$".$item[$i][price]."</td>
						<td>$".$item[$i][mSale]."</td>
						<td>$"._yearlySale($item[$i][mSale])."</td>
						<td>$"._netProfit(_yearlySale($item[$i][mSale]))."</td>
					</tr>";				
			}
			echo "</table>";
	 ?>

	 <!-- jQUery for showing commas of price-->
	<script>
	$(document).ready(function(){
	    $("td").each(function(){ 
	        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
	    });
	});
	</script>
</body>
</html>