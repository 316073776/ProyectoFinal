<?php require_once 'templates/header.php'; ?>
	<body>

      <ul class="nav">
        <li tabindex="0" class="active"><i class="bi bi-house-fill"></i> Inicio </li>
        <li tabindex="0"><i class="bi bi-people-fill"></i>Créditos</li>
        <li tabindex="0"><i class="bi bi-door-open-fill"></i>Cerrar sesión</li>
      </ul>
		<h1>Formulario para registro de productores</h1>
		<form id="formulario">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre">
			<br/>
			<label for="apellido">Apellido: </label>
			<input type="text" name="apellido" id="apellido">
			<br/>
			<label for="fecha_nacimiento">Fecha de nacimiento: </label>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
			<br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
<?php require_once 'templates/footer.php'; ?>
