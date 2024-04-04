<html>
<head>
</head>
<body>
<?php
	$numero = $_POST["num"];
	for ($contador = 1; $contador < 11; $contador++) {
		$total = $numero + $contador;
		echo $total;
		echo "</br>";
	}
?>
</body>
</html>

