<?php
	include 'conexion.php';
	$grupo_id = strip_tags($_POST['grupo_id']);
	$nombre = strip_tags($_POST['nombre']);
	$pais_origen = strip_tags($_POST['pais_origen']);

	if(is_numeric($grupo_id)){
        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $pais_origen)){

                                $sql = "UPDATE bdrecords.grupos SET nombre = '$nombre', pais_origen = '$pais_origen' WHERE grupo_id = $grupo_id;";

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
