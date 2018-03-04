<!DOCTYPE html>
<html>
<head>
	<title>WAAA</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
</head>
<body>
	<?php
		// header("Content-Type: text/html; charset-UTF-8");  -> Caracteres especiales

		// Constantes
		
		define("PI", 3.1416); 
		define('NAME', 'Michelle');
		define('NAME2', 'Jessica');
		
		//Funciones

		function sum ($n1, $n2) {
			return $n1 + $n2;
		}

		function sub_a ($n2, &$ref) {
			global $a;
			$ref = $a - $n2;
		}

		function infoName ($name) {
			$len = strlen($name);
			$letter = substr($name, 0, 1);
			return "<h4 class='blue-text text-darken-3'>La longitud de $name es $len y su letra inicial es $letter </h4>";
		}

		// Variables

		$var = "wo";
		$timezone  = -6; 
		$arr = array(1, "patata", 2, "kawaii"); // arreglos
		$persona = array(  // arreglo asociativo
			'nombre' => 'Jessy',
			'apellido' => 'Sánchez',
			'edad' => 20,
			'kawaii' => true
		);
		$arr2 = array( // Moldeado
			1 => "wa",
			1.5 => "wo",
			"1" => "wi",
			true => "wu"
		); 
		$arr3 = array(
			"a",
			"b",
			'wa' => "c",
			"d",
			7 => "e",
			"f"
		);
		$arrM = array( // Arreglo multidimensional
			'clave1' => 'Hola',
			42 => 24,
			'clave3' => array(
				'clave3_1' => array(
					'clave3_1_1' => 'Bye bye'
				)
			) 
		);
		$colors = array(
			'Rojo' => 'red',
			'Azul' => 'blue',
			'Verde' => 'green'
		);
		$fruits =  array("banana", 'lemon', 'apple', 'orange');
		$dDate = "date"; // Variable de date
		$date = gmdate('D, d M Y H:i:s', time() + 3600*($timezone+date("I")));
		$a = 5;
		$b = 4;
		$res = 0;

		sub_a($b, $res);

		// Fecha

		echo "<h5 class='orange-text right'>" . $date . "</h5><br>";

		// Imprimir

		echo "
		<h1 class='blue-text center'>
			<b>
				wa :)
			</b>		
		</h1>";
		
		// Concatenar .

		echo "<h4 class='teal-text'>Suma: " . sum(PI, $b) . "</h4>";
		echo "<h4 class='teal-text'>Resta: " . $res . "</h4>";
		
		
		echo "<h4 class='green-text'>PI: " . PI . "</h4>";
		echo "<h4 class='green-text'>NAME: " . NAME . "</h4>";
		echo "<h4 class='cyan-text'>Zoi una variable: " . $var . "</h4>";
		echo "<h4 class='grey-text'>Arreglo</h4>";
		var_dump($arr);
		var_dump($arr2);
		var_dump($arr3);
		var_dump($arrM);
		echo "<h4 class='amber-text'>Nombre: ". $persona['nombre'] ."</h4>";
		echo "<h4 class='amber-text'>Kawaii?: ". $persona['kawaii'] ."</h4>";
		echo infoName(NAME2);
		echo infoName(NAME);

		/*
			isset() -> Variable existe
			empty()	-> Variable vacía
			unset()	-> Borrar variable
		*/

		//Comillas Dobles Interpreta variables, simples no+

		//Funciones Arreglos
		/*
			array_push(var, wa) Agregar final
			array_pop(var) borrar final
			array_unshift() agregar inicio
			array_shift() borrar inicio 
		*/
	?>	
	<!-- each -->
	<ol>
		<?php
			foreach ($arr as $wa ) {
		?>
			<li><?php echo $wa;?></li>
		<?php
			}
		?>
	</ol>
	<?php
		sort($fruits);
		foreach ($fruits as $key => $val ) {
			echo "<br> fruits[". $key .", " . $val ."]";
		}
	?>
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Código</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($colors as $name => $code) { ?>
				<tr class="<?=$code?>">
					<td><?=$name?></td>
					<td><?=$code?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<br>
		<a onclick="M.toast({html: '<?php echo $$dDate; ?>', classes: 'rounded'})" class="btn">Toast!</a>
</body>
</html>