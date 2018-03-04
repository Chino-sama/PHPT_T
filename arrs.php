<?php 
	$nombres = "wa#ña#ño#wo#patata";
	echo "Contenido de nombres: " . $nombres;
	$lista = explode('#', $nombres);
	echo "<br>Contenido del arreglo creado: ";
	var_dump($lista);

	$lista2 = array('Jessy', 'es', 'una', 'patata', 'kawaii');
	$wa = implode(' ', $lista2);
	var_dump($lista2);
	echo '<br> Contenido de wa: ' . $wa;
?>