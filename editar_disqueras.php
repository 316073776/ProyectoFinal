<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['disquera_id'])){

        $id = $_GET['disquera_id'];
        $sql = "SELECT * FROM bdrecords.disqueras WHERE disquera_id = $id;";

        $result = pg_query($con, $sql);

        if($result){

            $disquera = pg_fetch_assoc($result);
        }else{

            $disquera = null;
        }
    }else{

        header('Location: index.php');
    }

?>
   <body>
   		<?php require_once 'templates/menu.php'; ?>
		<div class="flex flex-col justify-center items-center mt-5 mb-5">
			<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
				<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Formulario para editar la disquera <?php echo $disquera['nombre']; ?></h1>
				<form id="formularioDisqueraActualizar">
					<input type="hidden" name="disquera_id" id="disquera_id" value="<?php echo $disquera['disquera_id']; ?>">
					<div class="w-full flex flex-col mb-5">
						<label for="titulo" class="text-gray-700 uppercase font-bold">Nombre: </label>
						<input type="text" name="nombre" id="nombre" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $disquera['nombre']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="pais" class="text-gray-700 uppercase font-bold">Pais: </label>
						<input type="text" name="pais" id="pais" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $disquera['pais']; ?>">
					</div>

					<button type="submit" id="enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Editar</button>
				</form>
			</div>
		</div>
		<?php require_once 'templates/footer.php'; ?>
