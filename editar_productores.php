<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['productor_id'])){

        $id = $_GET['productor_id'];
        $sql = "SELECT * FROM bdrecords.productores WHERE productor_id = $id;";

        $result = pg_query($con, $sql);

        if($result){

            $productor = pg_fetch_assoc($result);
        }else{

            $productor = null;
        }
    }else{

        header('Location: index.php');
    }

?>
   <body>
   		<?php require_once 'templates/menu.php'; ?>
		<div class="flex flex-col justify-center items-center mt-5 mb-5">
			<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
				<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Formulario para editar la productor <?php echo $productor['nombre']; ?></h1>
				<form id="formularioProductorActualizar">
					<input type="hidden" name="productor_id" id="productor_id" value="<?php echo $productor['productor_id']; ?>">
					<div class="w-full flex flex-col mb-5">
						<label for="titulo" class="text-gray-700 uppercase font-bold">Nombre: </label>
						<input type="text" name="nombre" id="nombre" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $productor['nombre']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="apellido" class="text-gray-700 uppercase font-bold">Apellido: </label>
						<input type="text" name="apellido" id="apellido" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $productor['apellido']; ?>">
					</div>
					<div class="w-full flex flex-col mb-5">
                                                <label for="fecha_nacimiento" class="text-gray-700 uppercase font-bold">Fecha de nacimiento: </label>
                                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="<?php echo $productor['fecha_nacimiento']; ?>">
                                        </div>

					<button type="submit" id="enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Editar</button>
				</form>
			</div>
		</div>
		<?php require_once 'templates/footer.php'; ?>
