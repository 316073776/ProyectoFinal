<?php
	include 'conexion.php';
	$grupo_id = strip_tags($_POST['disquera_id']);
	$nombre = strip_tags($_POST['nombre']);
	$pais_origen = strip_tags($_POST['pais']);

	if(is_numeric($disquera_id)){
        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $pais)){

                                $sql = "UPDATE bdrecords.disqueras SET nombre = '$nombre', pais = '$pais' WHERE disquera_id = $disquera_id;";

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
