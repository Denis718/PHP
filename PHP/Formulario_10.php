<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
		<?php
			include "funcoes.php";
			# include inclui arquivo sem interrupções
			# require requer arquivo com interrupções caso não exista o arquivo
			#include_once ou require_once carregar apenas uma vez
			echo "<h1>Testando novas funções</h1>";
			ola();

			mostraValor(3);
			echo "Finalizando programa...";
		?>
	</div>
</body>
</html>