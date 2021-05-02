<!DOCTYPE html>
<html>
<head>
	<title>Enquanto</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
	<?php
		$num = isset($_GET["num"])?$_GET["num"]:1;

		/*$i = 1;

		do{
			$r = $num * $i;
			echo "$num x $i = $r<br/>";
			$i++;
		}while ($i <= 10);*/

		for($i = 1; $i <= 10; $i++){
			$r = $num * $i;
			echo "$num x $i = $r<br/>";
		}
			
	?>
	<br/><a href="Formulario_8.html">Voltar</a>
	</div>
</body>
</html>