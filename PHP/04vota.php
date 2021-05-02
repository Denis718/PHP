<!DOCTYPE html>
<html>
<head>
	<title>Idade Votar</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
	<?php
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
		$ano = isset($_GET["ano"])?$_GET["ano"]:0;
		$idade = date("Y") - $ano;

		if ($idade >= 16) {
			echo "$nome pode votar, pois tem $idade anos";
		}
		else
			echo "$nome não pode votar pois ainda não tem idade mínima";
	?>
	<br/><a href="Formulario_4.html">Voltar</a>
	</div>
</body>
</html>