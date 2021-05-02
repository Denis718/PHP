<!DOCTYPE html>
<html>
<head>
	<title>Idade Votar</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
	<?php
		$nota1 = number_format(isset($_GET["nota1"])?$_GET["nota1"]:0,1);
		$nota2 = number_format(isset($_GET["nota2"])?$_GET["nota2"]:0,1);
		$media = number_format(($nota1 + $nota2)/2,1);

		echo "A média entre <span class='aluno'>$nota1</span> e <span class='aluno'>$nota2</span> é igual a <span class='aluno'>$media</span>";


		if ($media < 5) {
			$sit = "Reprovado";
		}
		else if ($media <= 7) {
			$sit = "Recuperação";
		}
		else
			$sit = "Aprovado";

		echo "</br>Situação do aluno: <span class='aluno'>$sit</span>";
			
	?>
	<br/><a href="Formulario_5.html">Voltar</a>
	</div>
</body>
</html>