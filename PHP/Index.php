<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
		<h1 id="cab">Curso de PHP</h1>
		<?php
			 #  *****   AULA 04    ******
			$nome = "Apolonio";
			$idade = 75;
			$a = 8;
			$b = 5;
			$c = $a <=> $b;
			var_dump($c);
			//concatenação
			#echo $nome." tem ".$idade." anos!";

			//#   *****   AULA 05    ******
			/*$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$s = $n1 + $n2;
			$media = ($n1+$n2)/2;
			echo "<h2>Valores de entrada $n2 e $n1</h2>";
			echo "<br/>A soma vale $s";
			echo "<br/> A subtração vale ". ($n2-$n1);
			echo "<br/> A multiplicação vale ".($n1*$n2);
			echo "<br/> A divisão vale ".($n2/$n1);
			echo "<br/> O módulo vale ".($n2%$n1);
			echo "<br/> A média vale $media";
			echo "<br/> O valor de $n1<sup>$n2</sup> é ".pow($n1, $n2);
			/*Funções Matemáticas:
				abs() Valor Absoluto
				pow() Potenciação
				sqrt() Raiz Quadrada
				round() Arredondamento
				intval() Valor inteiro da variável
				number_format() Formatação*/


			//#   *****   AULA 06    ******
			// Operadores relacionais exemplo $x = "abc" $$x = "def" criou var $abc com valor "def";

			//#   *****   AULA 07    ******
			/*$n1 = $_GET["a"];
			$n2 = $_GET["b"];

			$r = ($n1 == $n2)? "SIM": "NÃO";
			echo "<h2>Valores de entrada $n2 e $n1</h2>";
			echo "<br/>As variaveis A e B são iguais? $r";*/

			
	    //No CMD -> indicar caminho cd Projetos_PHP
	    //Em seguida >php -S localhost:1010
	    //php -S <localhost:1010></localhost:1010>
	    ?>
    </div>
</body>
</html>

