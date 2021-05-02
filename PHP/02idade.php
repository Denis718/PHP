<!DOCTYPE html>
<html>
<head>
	<title>Valor_calculado</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
	<?php
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
		$ano = isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
		$idade = date("Y") - $ano;

		echo "$nome é $sexo e tem $idade anos"
	?>
	<br/><a href="Formulario_2.html">Voltar</a>
	</div>
</body>
</html>