<!DOCTYPE html>
<html>
<head>
	<title>GETGET</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
</head>
<body>
	<form action="waGet.php" method="GET">
		<div class="input-field">
			<label for="#age">Edad</label>
			<input id="age" type="number" name="age">
		</div>
		<button class="btn waves-effect" type="submit">Enviar</button>
	</form>
	<form action="waPost.php" method="POST">
		<div class="input-field">
			<label for="#age">Edad</label>
			<input id="age" type="number" name="age">
		</div>
		<button class="btn waves-effect" type="submit">Enviar</button>
	</form>
	<!-- Archivo -->
	<form 
		enctype="multipart/form-data"
		action="waArchive.php"
		method="POST" 
	>
		<h4 class="blue-text">Archivo</h4>
			<input type="file" name="archive">
			<button class="btn waves-effect" type="submit">Enviar</button>
	</form>
</body>
</html>