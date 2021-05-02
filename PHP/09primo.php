<!DOCTYPE html>
<html>
<head>
	<title>Curso PHP</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
	<?php
		$num = isset($_GET["num"])?$_GET["num"]:1;
		$c = 0;
		echo "<h3>Analisando o número $num...</h3>";
		for($i = 1; $i <= $num; $i++){
			$mod = $num % $i;
			if ($mod == 0) {
				$c++;
				$mult = "multi".$c;
				$$mult = $i;
			}
		}

		echo "Valores múltiplos: ";
		for ($i=1; $i <= $c ; $i++) { 
			echo "${'multi'.$i} ";
		}
		echo "<br/>Total de múltiplos: $c";
		if ($c <= 2) {
			echo "<br/><h3>Resultado: $num <span class='aluno'>É PRIMO!</span></h3>";
		}
		else
			echo "<br/><h3>Resultado: $num <span class='aluno'>NÃO É PRIMO!</span></h3>";
	?>
	<br/><a href="Formulario_9.html">Voltar</a>
	</div>
</body>
</html>