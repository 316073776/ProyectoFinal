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

   	<body class="flex flex-col justify-center items-center">
   		<script src="./js/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/ajaxformcancionesAct.js"></script>

   		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">EDITAR CANCIÓN "<?php echo $cancion['titulo']; ?>"</div>
			<div class="inputs">

				<form id="formularioCancionActualizar">

					<input type="hidden" name="cancion_id" id="cancion_id" value="<?php echo $cancion['cancion_id']; ?>">

					<label for="titulo" class="uppercase">Titulo: </label>
					<input type="text" name="titulo" id="titulo" value="<?php echo $cancion['titulo']; ?>">
					</div>

					<button type="submit" id="enviar">EDITAR</button>
				</form>

				<div class="btn">
					<a class="mt-5" href="./catalogo_canciones.php">REGRESAR</a>
				</div>

			</div>
		</div>
	</body>
</html>
