<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Alta Artistas</title>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/ajaxformartistas.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	</head>
	<body>
		<h1>Formulario para registro de artistas</h1>
		<form id="formulario">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre">
			<br/>
			<label for="apellido">Apellido: </label>
			<input type="text" name="apellido" id="apellido">
			<br/>
			<label for="pais">Pais de nacimiento: </label>
			<input type="text" name="pais" id="pais">
			<br/>
			<label for="nacimiento">Fecha de nacimiento: </label>
			<input type="date" name="nacimiento" id="nacimiento">
			<br/>
			<label for="nartistico">Nombre artistico: </label>
                        <input type="text" name="nartistico" id="nartistico">
                        <br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
	</body>
</html>
