<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['cancion_id'])){

        $id = $_GET['cancion_id'];
        $sql = "SELECT * FROM bdrecords.canciones WHERE cancion_id = $id;";

        $result = pg_query($con, $sql);

        if($result){

            $cancion = pg_fetch_assoc($result);
        }else{

            $cancion = null;
        }
    }else{

        header('Location: index.php');
    }

?>
   <body>
   		<?php require_once 'templates/menu.php'; ?>
		<div class="flex flex-col justify-center items-center mt-5 mb-5">
			<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
				<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Formulario para editar la cancion <?php echo $cancion['titulo']; ?></h1>
				<form id="formularioCancionActualizar">
					<input type="hidden" name="cancion_id" id="cancion_id" value="<?php echo $cancion['cancion_id']; ?>">
					<div class="w-full flex flex-col mb-5">
						<label for="titulo" class="text-gray-700 uppercase font-bold">Titulo: </label>
						<input type="text" name="titulo" id="titulo" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $cancion['titulo']; ?>">
					</div>

					<button type="submit" id="enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Editar</button>
				</form>
			</div>
		</div>
		<?php require_once 'templates/footer.php'; ?>
