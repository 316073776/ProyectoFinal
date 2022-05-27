<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Alta Artistas</title>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/ajaxformusuarios.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	</head>
	<body>
		<h1>Formulario para registro de usuarios</h1>
		<form id="formulario">
			<label>Nombre de usuario: </label>
			<input type="text" name="username" id="username">
			<br>
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre">
			<br/>
			<label for="apaterno">Apellido Paterno: </label>
			<input type="text" name="apaterno" id="apaterno">
			<br/>
			<label for="amaterno">Apellido Materno: </label>
			<input type="text" name="amaterno" id="amaterno">
			<br/>
			<label for="contrasena">Contraseña: </label>
			<input type="password" name="contrasena" id="contrasena">
			<br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
	</body>
</html>
