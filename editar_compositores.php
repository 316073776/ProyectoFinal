<?php require_once 'templates/header.php'; ?>  
<?php 
	if(!isUser()) header('Location: index.php');

    if(isset($_GET['compositor_id'])){

        $id = $_GET['compositor_id'];
        $sql = "SELECT * FROM bdrecords.compositores WHERE compositor_id = $id;";

        $result = pg_query($con, $sql);

        if($result){

            $compositor = pg_fetch_assoc($result);
        }else{

            $compositor = null;
        }
    }else{

        header('Location: index.php');
    }

?>

   <body class="flex flex-col justify-center items-center">

   		<script src="./js/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/ajaxformcompositoresAct.js"></script>

   		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">EDITAR COMPOSITOR "<?php echo $compositor['nombre']; ?>"</div>
			<div class="inputs">

				<form id="formularioCompositorActualizar">
					<input type="hidden" name="compositor_id" id="compositor_id" value="<?php echo $compositor['compositor_id']; ?>">

					<label for="titulo" class="uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre"   value="<?php echo $compositor['nombre']; ?>">
				
					<label for="apellido" class="uppercase">Apellido: </label>
					<input type="text" name="apellido" id="apellido"   value="<?php echo $compositor['apellido']; ?>">
				
                    <label for="pais_nacimiento" class="uppercase">Pais de nacimiento: </label>
                    <input type="text" name="pais_nacimiento" id="pais_nacimiento"   value="<?php echo $compositor['pais_nacimiento']; ?>">
            
                    <label for="fecha_nacimiento" class="uppercase">Fecha de nacimiento: </label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"   value="<?php echo $compositor['fecha_nacimiento']; ?>">
                                       

					<button type="submit" id="enviar">EDITAR</button>
				</form>

				<div class="btn">
					<a class="mt-5" href="./catalogo_compositores.php">REGRESAR</a>
				</div>

			</div>
		</div>
	</body>
</html>
	
