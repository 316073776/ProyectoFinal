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
   	<body class="flex flex-col justify-center items-center">

   		<script src="./js/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/ajaxformdisquerasAct.js"></script>	

   		<?php require_once 'templates/menu.php'; ?>

		<div class="container-forms flex flex-col p-5 mt-5 mb-5">
			<div class="brand-title">EDITAR DISQUERA "<?php echo $disquera['nombre']; ?>"</div>
			<div class="inputs">

				<form id="formularioDisqueraActualizar">
					<input type="hidden" name="disquera_id" id="disquera_id" value="<?php echo $disquera['disquera_id']; ?>">

					<label for="titulo" class=" uppercase">Nombre: </label>
					<input type="text" name="nombre" id="nombre"   value="<?php echo $disquera['nombre']; ?>">
				
					<label for="pais" class=" uppercase">Pais: </label>
					<input type="text" name="pais" id="pais"   value="<?php echo $disquera['pais']; ?>">

					<button type="submit" id="enviar">EDITAR</button>
				</form>

				<div class="btn">
					<a class="mt-5" href="./catalogo_disqueras.php">REGRESAR</a>
				</div>

			</div>
		</div>
	</body>
</html>
