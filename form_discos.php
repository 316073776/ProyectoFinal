<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

	$productores = obtenerProductores();
	$disqueras = obtenerDisqueras();
	$grupos = obtenerGrupos();

?>
   <body>
   		<?php require_once 'templates/menu.php'; ?>
		<div class="flex flex-col justify-center items-center mt-5 mb-5">
			<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
				<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Formulario para registro de discos</h1>
				<form id="formularioDiscos">
					<div class="w-full flex flex-col mb-5">
						<label for="titulo" class="text-gray-700 uppercase font-bold">Titulo: </label>
						<input type="text" name="titulo" id="titulo" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="grupo_id" class="text-gray-700 uppercase font-bold">Grupo ID: </label>
						<select name="grupo_id" id="grupo_id">
                            <?php foreach ($grupos as $grupo) : ?>
                                <option value="<?php echo $grupo['grupo_id'] ?>"><?php echo $grupo['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="anio" class="text-gray-700 uppercase font-bold">Año: </label>
						<input type="date" name="anio" id="anio" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="genero" class="text-gray-700 uppercase font-bold">Genero: </label>
						<input type="text" name="genero" id="genero" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="disquera_id" class="text-gray-700 uppercase font-bold">Disquera ID: </label>
						<select name="disquera_id" id="disquera_id">
                            <?php foreach ($disqueras as $disquera) : ?>
                                <option value="<?php echo $disquera['disquera_id'] ?>"><?php echo $disquera['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="productor_id" class="text-gray-700 uppercase font-bold">Productor ID: </label>
						<select name="productor_id" id="productor_id">
                            <?php foreach ($productores as $productor) : ?>
                                <option value="<?php echo $productor['productor_id'] ?>"><?php echo $productor['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="costo" class="text-gray-700 uppercase font-bold">Costo: </label>
						<input type="number" name="costo" id="costo" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
					</div>
				
					<button type="submit" id="enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Confirmar</button>
				</form>
			</div>
		</div>
		<?php require_once 'templates/footer.php'; ?>
