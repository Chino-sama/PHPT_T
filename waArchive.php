<!DOCTYPE html>
<html>
<head>
	<title>wa Archive</title>
</head>
<body>
	<?php
		if ($_FILES["archive"]["error"] > 0) {
			echo "Error: " . $_FILES["archive"]["error"] . "<br>";
		}
		else {
			echo "Nombre: " . $_FILES["archive"]["name"] . "<br>";
			echo "Tipo: " . $_FILES["archive"]["type"] . "<br>";
			echo "Tamaño: " . $_FILES["archive"]["size"] . "<br>";
			echo "Ruta: " . $_FILES["archive"]["tmp_name"];

			$nombreDirectorio = "img/";
			$idUnico = time();
			$nombreArchivo = $idUnico . "-" . $_FILES['archive']['name'];
			move_uploaded_file($_FILES['archive']['tmp_name'], $nombreDirectorio . $nombreArchivo);
			echo "<br> El archivo se cargó y se almacenó en: /img/" . $nombreArchivo;
		}
	?>
</body>
</html>