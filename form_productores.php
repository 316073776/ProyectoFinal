<?php require_once 'templates/header.php'; ?>


	<body class="flex flex-col justify-center items-center">
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/ajaxformproductores.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">REGISTRAR PRODUCTOR</div>
			<div class="inputs">

				<form id="formularioProductores">

					<label for="nombre" class="uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre">
					
					<label for="apellido" class="uppercase">Apellido(s): </label>
					<input type="text" name="apellido" id="apellido" placeholder="Apellido(s)">
					
					<label for="fecha_nacimiento" class="uppercase">Fecha de nacimiento: </label>
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento">
											
					<button type="submit" id="enviar">GUARDAR</button>

				</form>

				<div class="btn">
					<a class="mt-5" href="./catalogo_productores.php">REGRESAR</a>
				</div>

			</div>
		</div>
	</body>
</html>
