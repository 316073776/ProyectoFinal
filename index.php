<?php 
	session_start();
	if(isset($_SESSION) && isset($_SESSION['usuario'])){
		header("Location: catalogo_discos.php");
	}
?>

<?php require_once 'templates/header.php'; ?>

<body class="login">

	<script src="./js/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./js/ajaxformlogin.js"></script>	

	<div class="container-login">
		<div class="brand-logo"></div>
		<div class="brand-title">INICIAR SESIÓN</div>
		
		<div class="inputs">
			<form id="login-form" class="form" action="./peticiones/login.php" method="post">
		    
				<label for="username">USUARIO:</label>
				<input type="text" name="username" id="username" placeholder="Usuario" autocomplete="off">

				<label for="contrasena">CONTRASEÑA:</label>
				<input type="password" name="contrasena" id="contrasena" placeholder="Min 8 caracteres">

				<button type="submit">INGRESAR</button>
		       
			</form>
		</div>

		<div class="btn">
			<a class="mt-5" href="./form_usuarios.php">Registrate aquí</a>
		</div>
		<div class="btn">
			<a class="credits" href="creditos.php">CRÉDITOS</a>
		</div>
		
	</div>
</body>
</html>
