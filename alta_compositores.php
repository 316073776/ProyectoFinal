<?php
	include 'conexion.php';
	$nombre = strip_tags($_POST['nombre']);
	$apellido = strip_tags($_POST['apellido']);
	$pais = strip_tags($_POST['pais']);
	$nacimiento = strip_tags($_POST['anio']);


	if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){
		if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $apellido)){
                        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $pais)){
                        	$insercion= "insert into usuario(nombre,apellido,pais,anio,nartistico) values('$nombre','$apellido','$pais','$anio','$nartistico')";
        			$query = pg_query($con,$insercion);
        			if($query){
                			echo "Se ha almacenado en la base de datos de forma correcta  ";
        			} else {
                			echo "  No se ha podido almacenar en la base de datos  ";
        			}
        			pg_close($con);
			}
		}
        }
	else {
		echo "  Los datos no son validos  ";
	}
?>
