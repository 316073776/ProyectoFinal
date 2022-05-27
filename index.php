<?php 
	session_start();
	if(isset($_SESSION) && isset($_SESSION['usuario'])){
		header("Location: form_artistas.php");
	}
?>
<!doctype html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Proyecto final</title>

    <link href="css/stylelogin.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet"> 
	<script src="./js/jquery-3.6.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./js/ajaxformlogin.js"></script>	
    </head>
    
    <body>

		<div class="container-login">
		  <div class="brand-logo"></div>
		  <div class="brand-title">INICIAR SESIÓN</div>
		  <div class="inputs">

		  	<form id="login-form" class="form" action="./peticiones/login.php" method="post">
		    
		        <label for="username">USUARIO:</label>
		        <input type="text" name="username" id="username" placeholder="Usuario">
		        
				<label for="contrasena">CONTRASEÑA:</label>
		        <input type="password" name="contrasena" id="contrasena" placeholder="Min 6 caracteres">
		        
		        <button type="submit">LOGIN</button>
		       
			</form>
		  </div>

		  <a class="button-reg" href="#">Registrate aquí</a>
		  <a class="credits" href="creditos.html">CRÉDITOS</a>
		</div>
		
         
    </body>
</html>
