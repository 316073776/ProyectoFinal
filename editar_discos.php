<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

    $productores = obtenerProductores();
	$disqueras = obtenerDisqueras();
	$grupos = obtenerGrupos();

    if(isset($_GET['disco_id'])){

        $id = $_GET['disco_id'];
        $sql = "SELECT * FROM bdrecords.discos WHERE disco_id = $id;";

        $result = pg_query($con, $sql);

        if($result){

            $disco = pg_fetch_assoc($result);
        }else{

            $disco = null;
        }
    }else{

        header('Location: index.php');
    }

?>
   <body class="flex flex-col justify-center items-center">
   		<?php require_once 'templates/menu.php'; ?>
		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">EDITAR DISCO "<?php echo $disco['titulo']; ?>"</div>
			<div class="inputs">
				

				<form id="formularioDiscosActualizar">
					<input type="hidden" name="disco_id" id="disco_id" value="<?php echo $disco['disco_id']; ?>">
					
						<label for="titulo" class="uppercase">Título: </label>
						<input type="text" name="titulo" id="titulo" value="<?php echo $disco['titulo']; ?>">
					
					
						<label for="grupo_id">Grupo: </label>
						<div class="w-full flex flex-col mb-5">
						<select class="border-2 w-full p-2 mt-2 rounded-md" name="grupo_id" id="grupo_id">
                            <?php foreach ($grupos as $grupo) : ?>
                                <option value="<?php echo $grupo['grupo_id'] ?>" <?=(isset($disco) && $grupo['grupo_id'] == $disco['grupo_id']) ? 'selected' : ''?>><?php echo $grupo['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
					
						<label for="anio">Año: </label>
						<input type="date" name="anio" id="anio" value="<?php echo $disco['año']; ?>">
					
						<label for="genero">Género: </label>
						<input type="text" name="genero" id="genero" value="<?php echo $disco['genero']; ?>">
					
					
						<label for="disquera_id">Disquera: </label>
						<div class="w-full flex flex-col mb-5">
						<select class="border-2 w-full p-2 mt-2 rounded-md" name="disquera_id" id="disquera_id">
                            <?php foreach ($disqueras as $disquera) : ?>
                                <option value="<?php echo $disquera['disquera_id'] ?>" <?=(isset($disco) && $disquera['disquera_id'] == $disco['disquera_id']) ? 'selected' : ''?>><?php echo $disquera['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
					</div>
					
						<label for="productor_id">Productor: </label>
						<div class="w-full flex flex-col mb-5">
						<select class="border-2 w-full p-2 mt-2 rounded-md" name="productor_id" id="productor_id">
                            <?php foreach ($productores as $productor) : ?>
                                <option value="<?php echo $productor['productor_id'] ?>" <?=(isset($disco) && $productor['productor_id'] == $disco['productor_id']) ? 'selected' : ''?>><?php echo $productor['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
					</div>
					
						<label for="costo" >Costo: </label>
						<input type="number" name="costo" id="costo" value="<?php echo $disco['costo']; ?>">
					
				
					<button type="submit" id="enviar">EDITAR</button>
				</form>
				<div class="btn">
					<a class="mt-5" href="./catalogo_discos.php">REGRESAR</a>
				</div>
			</div>
		</div>
		<?php require_once 'templates/footer.php'; ?>
