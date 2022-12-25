<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
	echo "<table border='1'>";
	$f = fopen("table.tsv", "r");
	if ($f) {
		while (($str = fgetcsv($f, 0, "\t","\"","\\")) !== false) {
			echo "<tr>";
			for ($i=0; $i < count($str); $i++) {
				echo "<td>";
				echo $str[$i] . " ";
				echo "</td>";
			}
			echo "</tr>";
		}
	}
	fclose($f);	
	echo "</table>";
?>
</body>
</html>
