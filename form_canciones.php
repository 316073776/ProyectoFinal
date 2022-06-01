<?php require_once 'templates/header.php'; ?>
<?php 
	if(!isUser()){

		header('Location: index.php');
	}
?>

	<body class="flex flex-col justify-center items-center">
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/ajaxformcanciones.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">REGISTRAR CANCIÓN</div>
			<div class="inputs">

				<form id="formularioCanciones">

					<label for="titulo" class="uppercase">Título: </label>
					<input type="text" name="titulo" id="titulo" placeholder="Título">

					<button type="submit" id="enviar">GUARDAR</button>

				</form>
			
			</div>

			<div class="btn">
				<a class="mt-5" href="./catalogo_canciones.php">REGRESAR</a>
			</div>	
		</div>
	</body>
</html>
