<?php 
	$archivo = "waa.txt";
	$lineas = file($archivo);

	echo '<br> El contenido del archivo con file <br>';
	var_dump($lineas);

	echo '<br> El contenido del archivo con file_get_contents: ';
	$todo = file_get_contents($archivo);
	echo $todo;

	$variable = "La wea inmortal";
	file_put_contents("agregando.txt", $variable);
	echo '<br>';

	print( file_exists($archivo) ? "<br> Sí existe el archivo waa" : "<br> No existe waa");
	print( file_exists("pasta.txt") ? "<br> Sí existe el archivo pasta" : "<br> No existe pasta");
?>