<?php
	include 'conexion.php';
	$compositor_id = strip_tags($_POST['compositor_id']);
	$nombre = strip_tags($_POST['nombre']);
	$apellido = strip_tags($_POST['apellido']);
	$pais_nacimiento = strip_tags($_POST['pais_nacimiento']);
	$fecha_nacimiento = strip_tags($_POST['fecha_nacimiento']);


	if(is_numeric($compositor_id)){
        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $apellido)){
	                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $pais_nacimiento)){


                                $sql = "UPDATE bdrecords.compositores SET nombre = '$nombre', apellido = '$apellido', pais_nacimiento = '$pais_nacimiento', fecha_nacimiento = '$fecha_nacimiento' WHERE compositor_id = $compositor_id;";

                                $result = pg_query($con, $sql);

                                if($result){

                                    echo 'Registro actualizado correctamente';

                                }else{

                                    echo 'Error al actualizar el registro';

                                }

                                pg_close($con);
                                    
                            }else{
    
                                echo "  Los datos no son validos";
                            }
                                
                        }else{
    
                            echo "  Los datos no son validos";
                        }
                        
                    }else{
    
                        echo "  Los datos no son validos";
                    }
	}else{
    
             echo "  Los datos no son validos";
        }
?>
