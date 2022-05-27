<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<p>Hola login.php</p>
<p>verifica, inicia sesion y redirige a <a href="../catalogo_discos.php">catálogo_discos.php</a> en caso contrario, regresa a index.php</p>
</body>
</html>
=======
<?php
	require_once '../conexion.php';
	$username = $_POST['username'];
	$contrasena = $_POST['contrasena'];
>>>>>>> 1aae23a79ab97b47609ae189762b6143615d8dee

	if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $username)){
        	if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $contrasena)){
			$sql = "SELECT * FROM bdrecords.usuarios WHERE username = '$username';";
			$result = pg_query($con, $sql);
			if($result){
				$user = pg_fetch_all($result, PGSQL_ASSOC);

				if(password_verify($contrasena, $user[0]['contrasena'])){
					session_start();
					$_SESSION['usuario'] = $user[0];
					echo 'Exito';
				}else{
					echo 'La contraseña es incorrecta';
				}
			}else{
				echo 'El nombre de usuario es incorrecto';
			}
		}
	}

?>
