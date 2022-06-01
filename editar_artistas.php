<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['artista_id'])){

        $id = $_GET['artista_id'];
        $sql = "SELECT * FROM bdrecords.artistas WHERE artista_id = $id;";

        $result = pg_query($con, $sql);

        if($result){

            $artista = pg_fetch_assoc($result);
        }else{

            $artista = null;
        }
    }else{

        header('Location: index.php');
    }

?>
   <body>
   		<?php require_once 'templates/menu.php'; ?>
		<div class="flex flex-col justify-center items-center mt-5 mb-5">
			<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
				<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Formulario para editar el artista <?php echo $artista['nombre']; ?></h1>
				<form id="formularioArtistaActualizar">
					<input type="hidden" name="artista_id" id="artista_id" value="<?php echo $artista['artista_id']; ?>">
					<div class="w-full flex flex-col mb-5">
						<label for="titulo" class="text-gray-700 uppercase font-bold">Nombre: </label>
						<input type="text" name="nombre" id="nombre" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $artista['nombre']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="apellido" class="text-gray-700 uppercase font-bold">Apellido: </label>
						<input type="text" name="apellido" id="apellido" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $artista['apellido']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="pais_nacimiento" class="text-gray-700 uppercase font-bold">Pais de nacimiento: </label>
						<input type="text" name="pais_nacimiento" id="pais_nacimiento" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $artista['pais_nacimiento']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="fecha_nacimiento" class="text-gray-700 uppercase font-bold">Fecha nacimiento: </label>
						<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $artista['fecha_nacimiento']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
                                                <label for="nombre_artistico" class="text-gray-700 uppercase font-bold">Nombre artistico: </label>
                                                <input type="text" name="nombre_artistico" id="nombre_artistico" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $artista['nombre_artistico']; ?>">
                                        </div>

					<button type="submit" id="enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Editar</button>
				</form>
			</div>
		</div>
		<?php require_once 'templates/footer.php'; ?>
