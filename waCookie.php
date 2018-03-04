<?php
	$nombre_cookie = 'usuario';
	$valor_cookie = 'anonymous';
	$date_of_expiry = time() + 30;
	setcookie($nombre_cookie, $valor_cookie, $date_of_expiry);
	echo "Cookie creada! :d";
?>