<?php
	include 'conexion.php';
	$productor_id = strip_tags($_POST['productor_id']);
	$nombre = strip_tags($_POST['nombre']);
	$apellido = strip_tags($_POST['apellido']);
	$fecha_nacimiento = strip_tags($_POST['fecha_nacimiento']);

	if(is_numeric($productor_id)){
        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $apellido)){

                                $sql = "UPDATE bdrecords.productores SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento = '$fecha_nacimiento' WHERE productor_id = $productor_id;";

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
?>
