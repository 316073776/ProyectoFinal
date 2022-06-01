<?php require_once 'templates/header.php'; ?>
<?php 
	if(!isUser()){

		header('Location: index.php');
	}
?>
	<body class="flex flex-col justify-center items-center">
		<script src="js/jquery-3.6.0.js"></script>
                <script src="js/ajaxformartistas.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
		
		<?php require_once 'templates/menu.php'; ?>
		
		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">REGISTRAR ARTISTA</div>
			<div class="inputs">
		 
				<form id="formularioArtistas">
					
					<label for="nombre" class="uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre">

					<label for="apellido" class="uppercase">Apellido(s): </label>
					<input type="text" name="apellido" id="apellido" placeholder="Apellido(s)">

					<label for="pais_nacimiento" class="uppercase">País de nacimiento: </label>
					<input type="text" name="pais_nacimiento" id="pais_nacimiento" placeholder="País de nacimiento">

					<label for="fecha_nacimiento" class="uppercase">Fecha de nacimiento: </label>
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento">

					<label for="nombre_artistico" class="uppercase">Nombre artístico: </label>
					<input type="text" name="nombre_artistico" id="nombre_artistico" placeholder="Nombre artístico">

					<button type="submit" id="enviar">GUARDAR</button>
				
				</form>
				<a class="mt-5" href="./index.php">REGRESAR</a>
			</div>		
		</div>
	</body>
</html>
