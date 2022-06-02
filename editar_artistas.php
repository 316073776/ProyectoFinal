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

   	<body class="flex flex-col justify-center items-center">

   		<script src="./js/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/ajaxformartistasAct.js"></script>

   		<?php require_once 'templates/menu.php'; ?>
		
		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">EDITAR ARTISTA "<?php echo $artista['nombre']; ?>"</div>
			<div class="inputs">

				<form id="formularioArtistaActualizar">

					<input type="hidden" name="artista_id" id="artista_id" value="<?php echo $artista['artista_id']; ?>">

					<label for="titulo" class="uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre" value="<?php echo $artista['nombre']; ?>">
			
					<label for="apellido" class="uppercase">Apellido: </label>
					<input type="text" name="apellido" id="apellido" value="<?php echo $artista['apellido']; ?>">
				
					<label for="pais_nacimiento" class="uppercase">País de nacimiento: </label>
					<input type="text" name="pais_nacimiento" id="pais_nacimiento" value="<?php echo $artista['pais_nacimiento']; ?>">
				
					<label for="fecha_nacimiento" class="uppercase">Fecha nacimiento: </label>
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $artista['fecha_nacimiento']; ?>">
				
                    <label for="nombre_artistico" class="uppercase">Nombre artístico: </label>
                    <input type="text" name="nombre_artistico" id="nombre_artistico"   value="<?php echo $artista['nombre_artistico']; ?>">
                                        

					<button type="submit" id="enviar">EDITAR</button>
				</form>

				<div class="btn">
					<a class="mt-5" href="./catalogo_artistas.php">REGRESAR</a>
				</div>

			</div>
		</div>
	</body>
</html>
