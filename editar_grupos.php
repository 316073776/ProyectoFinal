<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['grupo_id'])){

        $id = $_GET['grupo_id'];
        $sql = "SELECT * FROM bdrecords.grupos WHERE grupo_id = $id;";

        $result = pg_query($con, $sql);

        if($result){

            $grupo = pg_fetch_assoc($result);
        }else{

            $grupo = null;
        }
    }else{

        header('Location: index.php');
    }

?>
   <body>
   		<?php require_once 'templates/menu.php'; ?>
		<div class="flex flex-col justify-center items-center mt-5 mb-5">
			<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
				<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Formulario para editar el grupo <?php echo $grupo['nombre']; ?></h1>
				<form id="formularioGrupoActualizar">
					<input type="hidden" name="grupo_id" id="grupo_id" value="<?php echo $grupo['grupo_id']; ?>">
					<div class="w-full flex flex-col mb-5">
						<label for="titulo" class="text-gray-700 uppercase font-bold">Nombre: </label>
						<input type="text" name="nombre" id="nombre" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $grupo['nombre']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="pais_origen" class="text-gray-700 uppercase font-bold">Pais de Origen: </label>
						<input type="text" name="pais_origen" id="pais_origen" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $grupo['pais_origen']; ?>">
					</div>

					<button type="submit" id="enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Editar</button>
				</form>
			</div>
		</div>
		<?php require_once 'templates/footer.php'; ?>
