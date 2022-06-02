<?php require_once 'templates/header.php'; ?>   
<?php 
	if(!isUser()){

		header('Location: index.php');
	}
?>

	<body class="flex flex-col justify-center items-center">
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/ajaxformgrupos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

		<?php require_once 'templates/menu.php'; ?>

			
		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">REGISTRAR GRUPO</div>
			<div class="inputs">

				<form id="formularioGrupos">
					
					<label for="nombre" class="uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre">
					
					<label for="pais_origen" class="uppercase">País de origen: </label>
					<input type="text" name="pais_origen" id="pais_origen" placeholder="País de origen">
					
					<button type="submit" id="enviar">GUARDAR</button>
				
				</form>

				<div class="btn">
					<a class="mt-5" href="./catalogo_grupos.php">REGRESAR</a>
				</div>

			</div>
		</div>
    </body>
</html>
