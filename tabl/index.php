<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style>
	body{
		background-color: rgb(187, 231, 132);
	}
	#tab {
		position: absolute;
		top:5%;
		left: 30%;
		font-family: arial;
	}
		table {

			border-collapse: collapse;
			text-align: center;
		}
		th,td{
			border: 1px solid #cccccc;
			padding: 2%;
		}
		td:nth-child(1){
			width: 15%;
		}
		tr:nth-child(odd){
			background: rgb(149, 153, 77);

		}
		tr:nth-child(even){
			background: rgb(187, 190, 125);
		}
	</style>
</head>
<body>
	<div id="tab">
<table>
	<tr>
		<th >Roll No.</th>
		<th>Name</th>
	</tr>
	<?php
		$i=1;
		$j=['Arun','Ajay','Amith','vijay'];
		$k=0;
		for ($i; $i <= 100; $i++ , $k++) {
			echo "<tr>";
			echo "<td>$i</td><td>$j[$k]";
			echo "</tr";
			if ($k == 3) {
				$k=-1;
			}
		}
	?>
</table>
</div>
</body>
</html>
