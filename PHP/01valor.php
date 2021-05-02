<!DOCTYPE html>
<html>
<head>
	<title>Valor_calculado</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
	<div>
	<?php
		$valor = $_GET["v"];
		$raiz = sqrt($valor);
		echo "A raiz quadrada de $valor é $raiz";
	?>
	</div>
</body>
</html>