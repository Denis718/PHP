<!DOCTYPE html>
<html>
<head>
	<title>Curso PHP</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
	<?php
		function soma ($a, $b){
			$s = $a + $b;
			return $s;
		}

		function somaDin(){
			$p = func_get_args();
			$tot = func_num_args();
			$s = 0;
			for ($i=0; $i < $tot; $i++) { 
				$s = $s + $p[$i];
			}
			return $s;
		}

		#Passagem por referência ' & '-> Endereço
		function teste(&$x){
			$x += 2;
			echo "<p>O valor de X é $x</p>";
		}

		$a = 3;
		teste($a);
		echo "<p>O valor de A é $a</p>";

		/*#Recursividade
		function fat ($f){
			if($f == 1)
				return 1;
			else
				return $f * fat($f - 1);
		}

		$x = 3;
		$y = 4;
		$r = soma($x, $y);
		echo "A soma entre $x e $y é igual a $r<br/>";

		$res = somaDin(3, 4, 5, 8, 9);

		echo "Soma Dinâmica retornou: $res<br/>";

		$fatorial = fat(5);
		echo "O fatorial de 5! é $fatorial";*/
	?>
	<!--<br/><a href="Formulario_9.html">Voltar</a>-->
	</div>
</body>
</html>