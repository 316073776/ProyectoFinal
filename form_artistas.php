<?php require_once 'templates/header.php'; ?>
	<body>

      <ul class="nav">
        <li tabindex="0" class="active"><i class="bi bi-house-fill"></i> Inicio </li>
        <li tabindex="0"><i class="bi bi-people-fill"></i>Créditos</li>
        <li tabindex="0"><i class="bi bi-door-open-fill"></i>Cerrar sesión</li>
      </ul>
		<h1>Formulario para registro de artistas</h1>
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
			<label for="nombre_artistico">Nombre artistico: </label>
                        <input type="text" name="nombre_artistico" id="nombre_artistico">
                        <br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
		<?php require_once 'templates/footer.php'; ?>
