<?php 
	$conexion = new mysqli("localhost", 'cusophp', 'php', 'libreria');
	
	if($conexion->connect_errno) {
		echo "<br> No pues no se conecto la wea";
		echo "<br> Error: " . $conexion->connect_erno;
		echo "<br> Error: " . $conexion->connect_error;
	} else {
		$sql = "insert into autores (autor, nacionalidad, edad) values ('Pepe el Toro', 'Mexicana', 35)";
		$conexion->query($sql);

		$sql = "insert into autores (autor, nacionalidad, edad) values ('Hitler', 'Austriaca', 45)";
		$conexion->query($sql);
		
		$sql = "insert into autores (autor, nacionalidad, edad) values ('Bart', 'Norteamericana', 15)";
		$conexion->query($sql);

		echo "Se realizaron 3 instrucciones de insert en la base de datos";
		$conexion->close();	
	}
?>