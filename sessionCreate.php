<?php  
	session_start();
	echo '<br>session_id(): ' . session_id();
	echo '<br>session_name(): ' . session_name();
	echo '<br>';
	print_r(session_get_cookie_params());
	$_SESSION['usuario'] = "Monu";
	echo '<br>Valor de la variable de sesión usuario: ' . $_SESSION['usuario'];
?>