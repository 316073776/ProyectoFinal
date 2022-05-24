<?php
	include 'conexion.php';
	$titulo = strip_tags($_POST['titulo']);
	$grupo = strip_tags($_POST['grupo']);
	$anio = strip_tags($_POST['anio']);
	$genero = strip_tags($_POST['genero']);
	$disquera = strip_tags($_POST['disquera']);
	$productor = strip_tags($_POST['productor']);
	$costo = strip_tags($_POST['costo']);


	if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $titulo)){
		if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $grupo)){
                        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $genero)){
				if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $disquera)){
                       			if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $productor)){
                                		if(preg_match('/^-?(\d|[1-9]+\d*|\.\d+|0\.\d+|[1-9]+\d*\.\d+)$/', $costo)){
                        				$insercion= "insert into usuario(titulo,grupo,anio,genero,disquera,productor,costo) values('$titulo','$grupo','$anio','$genero','$disquera','$productor','$costo')";
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
			}
		}
	}
	else {
		echo "  Los datos no son validos  ";
	}
?>
