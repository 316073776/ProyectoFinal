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
   	<body class="flex flex-col justify-center items-center">
   		<script src="./js/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/ajaxformproductoresAct.js"></script>	

   		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">EDITAR PRODUCTOR "<?php echo $productor['nombre']; ?>"</div>
			<div class="inputs">
				<form id="formularioProductorActualizar">
					<input type="hidden" name="productor_id" id="productor_id" value="<?php echo $productor['productor_id']; ?>">
					
					<label for="titulo" class="uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre"   value="<?php echo $productor['nombre']; ?>">
				
					<label for="apellido" class="uppercase">Apellido: </label>
					<input type="text" name="apellido" id="apellido"   value="<?php echo $productor['apellido']; ?>">
					
                    <label for="fecha_nacimiento" class="uppercase">Fecha de nacimiento: </label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"   value="<?php echo $productor['fecha_nacimiento']; ?>">
                                        
					<button type="submit" id="enviar">EDITAR</button>
				</form>


				<div class="btn">
					<a class="mt-5" href="./catalogo_productores.php">REGRESAR</a>
				</div>

			</div>
		</div>
	</body>
</html>
