<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Alta Compositores</title>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/ajaxformcompositores.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	</head>
	<body>
		<h1>Formulario para registro de compositores</h1>
		<form id="formulario">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre">
			<br/>
			<label for="apellido">Apellido: </label>
			<input type="text" name="apellido" id="apellido">
			<br/>
			<label for="pais_nacimiento">Pais de nacimiento: </label>
			<input type="text" name="pais_nacimiento" id="pais_nacimiento">
			<br/>
			<label for="fecha_nacimiento">Fecha de nacimiento: </label>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
			<br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
	</body>
</html>
