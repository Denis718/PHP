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
			/*$a = "Leite";
			$v = 4.5;

			printf("O %s custa R$ %.2f", $a, $v);

			echo "<br/>";

			$vet[0] = 4;
			$vet[1] = 9;
			$vet[2] = 3;

			#print_r($vet);
			#var_dump($vet);
			var_export($vet);*/

			/*$t = "<br/>Aqui temos um texto gigante que será quebrado em partes pelo uso do wordwrap";
			$r = wordwrap($t, 5, "<br/>\n", false);
			echo $r;*/

			#strlen($txt);

			/*$nome = "   Denis de Carvalho Silva   ";
			echo(strlen($nome));
			$novo = trim($nome);
			echo(strlen($novo));*/
			#ltrim -> remove espaço da esquerda
			#rtrim -> remove os espaços da direita

			#Contar palavras
			/*$frase = "Eu vou estudar PHP Hoje";
			$count = str_word_count($frase, 1);#str_word_count(string, 1) serve para criar um  vetor com a contagem, 2 com a posição
			#echo $count;
			echo "<br/>";
			print_r($count);*/

			/*$site = "Curso em video";
			$vetor = explode(" ", $site);#explode(var de separação, string)
			print_r($vetor);*/

			#str_split($string) gera um vetor de letras

			/*$vet[0] = "Curso";
			$vet[1] = "em";
			$vet[2] = "Video";
			$texto = implode("#", $vet) ou join("#", $vet);*/

			#$letra = chr(67);# letra = C  char cod ANSI
			#$cod = ord("C"); #cod 67

			#strtolower(string);
			#strtoupper(string);
			#ucfirst(string); Uppercase first
			#ucwords(string); Uppercase words
			#strrev(string) string reverse;

			/*$frase = "Estou aprendendo PHP";
			$pos = stripos($frase, "php");#strpos exato ou stripos ignorar caixa
			echo "$frase <br/> A string foi encontrada na posição $pos";*/

			#substr_count(string, "#"); conta o num de vezes que aparece

			/*$site = "Curso em video";
			$sub = substr($site, 0, 5);#pode ter valor negativos pesquisar
			echo "$sub ";*/

			/*$nome = "Joselito";
			$novo = str_pad($nome, 30, "#", STR_PAD_RIGHT);
			#STR_PAD_CENTER E STR_PAD_LEFT
			printf("Este é o %s rapaz", $novo);*/

			#str_repeat(string, 5) repete 5 vezes
			#str_replace(str_1, str_2, $var) trocar str_ireplace(...)
			

		?>
	</div>
</body>
</html>