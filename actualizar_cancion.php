<?php
	include 'conexion.php';
	$cancion_id = strip_tags($_POST['cancion_id']);
	$titulo = strip_tags($_POST['titulo']);


	if(is_numeric($cancion_id)){
        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $titulo)){


                                $sql = "UPDATE bdrecords.canciones SET titulo = '$titulo' WHERE cancion_id = $cancion_id;";

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
?>
