<!doctype html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Proyecto final</title>

    <link href="css/stylelogin.css" rel="stylesheet">
    </head>
    
    <body>

		<div class="container">
		  <div class="brand-logo"></div>
		  <div class="brand-title">INICIAR SESIÓN</div>
		  <div class="inputs">

		  	<form id="login-form" class="form" action="./peticiones/login.php" method="post">
		    
		        <label for="username">USUARIO:</label>
		        <input type="text" name="username" id="username" placeholder="Usuario">
		        
				<label for="password">CONTRASEÑA:</label>
		        <input type="password" name="password" id="password" placeholder="Min 6 caracteres">
		        
		        <button type="submit">LOGIN</button>
		       
			</form>
			<a href="./form_usuarios.php">¿No tienes cuenta? Registrate</a>
		  </div>
		</div>
         
    </body>
</html>
