<?php 
	$nombre_cookie = "usuario";
	unset($_COOKIE[$nombre_cookie]);
	$res =  setcookie($nombre_cookie, '', time() - 3600);
?>