<!DOCTYPE html>
<html>
<head>
	<title>waPOST</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
</head>
<body>
	<?php
		$age = $_POST['age'];
		echo "La edad es: " . $age;
	?>
</body>
</html>