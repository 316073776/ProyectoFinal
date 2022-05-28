<?php require_once 'templates/header.php'; ?>
	<body>

      <ul class="nav">
        <li tabindex="0" class="active"><i class="bi bi-house-fill"></i> Inicio </li>
        <li tabindex="0"><i class="bi bi-people-fill"></i>Créditos</li>
        <li tabindex="0"><i class="bi bi-door-open-fill"></i>Cerrar sesión</li>
      </ul>
		<h1>Formulario para registro de canciones</h1>
		<form id="formulario">
			<label for="titulo">Titulo: </label>
			<input type="text" name="titulo" id="titulo">
			<br/>

			<button type="submit" id="enviar">Confirmar</button>
		</form>
		<?php require_once 'templates/footer.php'; ?>
