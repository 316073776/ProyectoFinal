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
   	<body class="flex flex-col justify-center items-center">

   		<script src="./js/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/ajaxformgruposAct.js"></script>

   		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">EDITAR GRUPO "<?php echo $grupo['nombre']; ?>"</div>
			<div class="inputs">

				<form id="formularioGrupoActualizar">
					<input type="hidden" name="grupo_id" id="grupo_id" value="<?php echo $grupo['grupo_id']; ?>">
					
					<label for="titulo" class="uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre"   value="<?php echo $grupo['nombre']; ?>">
				
					<label for="pais_origen" class="uppercase">País de Origen: </label>
					<input type="text" name="pais_origen" id="pais_origen"   value="<?php echo $grupo['pais_origen']; ?>">

					<button type="submit" id="enviar">EDITAR</button>
				</form>

				<div class="btn">
					<a class="mt-5" href="./catalogo_grupos.php">REGRESAR</a>
				</div>

			</div>
		</div>
	</body>
</html>
