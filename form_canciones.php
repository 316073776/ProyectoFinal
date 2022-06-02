<?php require_once 'templates/header.php'; ?>
<?php 
	if(!isUser()){

		header('Location: index.php');
	}

	$discos = obtenerDiscos();

?>

	<body class="flex flex-col justify-center items-center">

		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">REGISTRAR CANCIÓN</div>
			<div class="inputs">

				<form id="formularioCanciones">
						<label for="titulo" class="uppercase">Título: </label>
						<input type="text" name="titulo" id="titulo" placeholder="Título">
					<div class="w-full flex flex-col mb-5">
                        <label for="disco_id" class="uppercase">Disco: </label>
                        <div class="w-full flex flex-col mb-5">
                        <select class="border-2 w-full p-2 mt-2 rounded-md" name="disco_id" id="disco_id">
    			<?php foreach ($discos as $disco) : ?>
        			<option value="<?php echo $disco['disco_id'] ?>"><?php echo $disco['titulo'] ?></option>
                            			<?php endforeach; ?>
                        			</select>
                        		</div>
                                        </div>
					<button type="submit" id="enviar">GUARDAR</button>

				</form>
			
			</div>

			<div class="btn">
				<a class="mt-5" href="./catalogo_canciones.php">REGRESAR</a>
			</div>	
		</div>
<?php require_once 'templates/footer.php'; ?>