<?php  
	$nombre_cookie = 'usuario';
	if (!isset($_COOKIE[$nombre_cookie])) {
		print 'Cookie with name "' . $nombre_cookie . '" does not exist...';
	} else {
		print 'Cookie with name "' . $nombre_cookie . '" value is: ' . $_COOKIE[$nombre_cookie];
	}
?>