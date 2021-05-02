<!DOCTYPE html>
<html>
<head>
	<title>Idade Votar</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
	<?php
		$num = number_format(isset($_GET["num"])?$_GET["num"]:0,2);
		//$oper = number_format(isset($_GET["oper"])?$_GET["oper"]:0,2);
		$oper = number_format($_GET["oper"] ?? 0,2);
		switch ($oper) {
			case 1:
				$r = $num * 2;
				break;
			case 2:
				$r = pow($num, 3);
				break;
			case 3:
				$r = number_format(sqrt($num),2);
				break;
		}

		echo "O resultado da operação solicitada foi <span class='aluno'>$r</span>";
			
	?>
	<br/><a href="Formulario_6.html">Voltar</a>
	</div>
</body>
</html>