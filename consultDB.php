<?php 
	$conexion = new mysqli("localhost", 'cusophp', 'php', 'libreria');
	
	if($conexion->connect_errno) {
		echo "<br> No pues no se conecto la wea";
		echo "<br> Error: " . $conexion->connect_erno;
		echo "<br> Error: " . $conexion->connect_error;
	} else {
		
		$sql = "SELECT * FROM autores";
		$res = $conexion->query($sql);

		echo "<br> Cantidad de registros de la tabla autores: " . $res->num_rows;

		// echo "<br><br>Accesando de manera asociativa";
		// if($res->num_rows > 0)
		// 	while($reg = $res->fetch_assoc())
		// 		echo "<br>" . $reg["autor"] . " - " . $reg["nacionalidad"] . " - " . $reg["edad"];

		echo "<br><br>Accesando de manera numérica";
		if($res->num_rows > 0)
			while($reg = $res->fetch_array())
				echo "<br>" . $reg[1] . " - " . $reg[2] . " - " . $reg[3];
		$conexion->close();	
	}
?>