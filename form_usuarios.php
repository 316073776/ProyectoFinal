<?php require_once 'templates/header.php'; ?>
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
<?php require_once 'templates/footer.php'; ?>
