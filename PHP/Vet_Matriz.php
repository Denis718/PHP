<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
	<div>
		<pre><!--modo de visualização-->
			<table border="1"><tr>
		<?php
			/*$vet1 = array(3, 2, 4, 5, 8);
			print_r($vet1);*/
			/*$c = range(5, 20, 2);
			$c[] = 21;
			#print_r($c);
			foreach ($c as $v) {
				echo "<td>$v ";
			}*/

			/*$v = array(0 =>5 , 1=>2, 3 => 8);
			unset($v[0]);
			print_r($v);*/

			/*$cad = array('nome' => 'Ana', 'idade' => 23, 'peso'=> 60.5);
			#print_r($cad);
			foreach ($cad as $k) {
				echo "<td>$k ";
			}*/
			/*$m = array(array(5, 3), array(9, 1), array(7, 2));
			$m[2][0] = $m[1][1];
			print_r($m);
			var_dump($m);*/

			/*$v = array("A", "J", "M", "x", "K");
			print_r($v);
			array_pop($v);
			array_unshift($v, "O");#torna-se o índice 0
			array_shift($v);
			print_r($v);*/

			$vet1 = array(3, 2, 4, 5, 8);
			asort($vet1);
			print_r($vet1);
			#sort(array); ordenar alterando índices
			#rsort(array); ordena de forma reversa altera índices
			#asort($vet1);#ordena sem alterar índices(keys)
			ksort($vet1);
			print_r($vet1);
			krsort($vet1);
			print_r($vet1);

		?>
			</table>
		</pre>
	</div>
</body>
</html>