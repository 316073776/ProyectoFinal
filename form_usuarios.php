<?php require_once 'templates/header.php'; ?>
<body class="flex flex-col justify-center items-center">
	
	<script src="js/jquery-3.6.0.js"></script>
    <script src="js/ajaxformusuarios.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	
	<div class="container-forms flex flex-col p-5 mt-5 mb-5">
		<div class="brand-title">REGISTRAR USUARIO</div>
		<div class="inputs">
			<form id="formularioUsuarios" autocomplete="off">
			
				<label for="username" class="uppercase">Nombre de usuario: </label>
				<input type="text" name="username" id="username" placeholder="Usuario">
			
				<label for="nombre" class=" uppercase">Nombre: </label>
				<input type="text" name="nombre" id="nombre"  placeholder="Nombre">

				<label for="apaterno" class=" uppercase ">Apellido Paterno: </label>
				<input type="text" name="apaterno" id="apaterno"  placeholder="Apellido paterno">

				<label for="amaterno" class=" uppercase ">Apellido materno: </label>
				<input type="text" name="amaterno" id="amaterno"  placeholder="Apellido materno">

				<label for="contrasena" class=" uppercase ">Contraseña: </label>
				<input type="password" name="contrasena" id="contrasena"  placeholder="Contraseña">

				<label for="contrasena2" class=" uppercase ">Confirmar contraseña: </label>
                <input type="password" name="contrasena2" id="contrasena2"  placeholder="Confirmar contraseña">

				<button class="mb-5" type="submit" id="enviar">GUARDAR</button>
			
		</form>
		<div class="btn">
			<a href="./index.php">REGRESAR</a>
		</div>
		

		</div>		
	</div>
</body>
</html
