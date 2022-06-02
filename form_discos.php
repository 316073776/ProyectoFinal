<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

	$productores = obtenerProductores();
	$disqueras = obtenerDisqueras();
	$grupos = obtenerGrupos();

?>


   	<body class="flex flex-col justify-center items-center">
   		<?php require_once 'templates/menu.php'; ?>
		
		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">REGISTRAR DISCO</div>
			<div class="inputs">

				<form id="formularioDiscos">
					
					<label for="titulo" class="uppercase">Título: </label>
					<input type="text" name="titulo" id="titulo" placeholder="Título">
				
					<label for="grupo_id" class="uppercase">Grupo: </label>
					<div class="w-full flex flex-col mb-5">
					<select class="border-2 w-full p-2 mt-2 rounded-md" name="grupo_id" id="grupo_id">
                        <?php foreach ($grupos as $grupo) : ?>
                            <option value="<?php echo $grupo['grupo_id'] ?>"><?php echo $grupo['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
				
					<label for="anio" class="uppercase">Año: </label>
					<input type="date" name="anio" id="anio" placeholder="Año">
				
					<label for="genero" class="uppercase">Género: </label>
					<input type="text" name="genero" id="genero" placeholder="Género">
				
					<label for="disquera_id" class="uppercase">Disquera: </label>
					<div class="w-full flex flex-col mb-5">
					<select class="border-2 w-full p-2 mt-2 rounded-md" name="disquera_id" id="disquera_id">
                        <?php foreach ($disqueras as $disquera) : ?>
                            <option value="<?php echo $disquera['disquera_id'] ?>"><?php echo $disquera['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
				
					<label for="productor_id" class="uppercase">Productor: </label>
					<div class="w-full flex flex-col mb-5">
					<select class="border-2 w-full p-2 mt-2 rounded-md" name="productor_id" id="productor_id">
                        <?php foreach ($productores as $productor) : ?>
                            <option value="<?php echo $productor['productor_id'] ?>"><?php echo $productor['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

				
					<label for="costo" class="uppercase">Costo: </label>
					<input type="number" name="costo" id="costo" placeholder="Costo">
									
					<button type="submit" id="enviar">GUARDAR</button>
				</form>
			</div>
		</div>
	
		<?php require_once 'templates/footer.php'; ?>
