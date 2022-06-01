<?php
	include 'conexion.php';
    $disco_id = strip_tags($_POST['disco_id']);
	$titulo = strip_tags($_POST['titulo']);
	$grupo_id = strip_tags($_POST['grupo_id']);
	$anio = strip_tags($_POST['anio']);
	$genero = strip_tags($_POST['genero']);
	$disquera_id = strip_tags($_POST['disquera_id']);
	$productor_id = strip_tags($_POST['productor_id']);
	$costo = strip_tags($_POST['costo']);


	if(is_numeric($disco_id)){
        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $titulo)){
            if(is_numeric($grupo_id)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $genero)){
                    if(preg_match('/^[1-9][0-9]{0,10}$/i', $disquera_id)){
                        if(is_numeric($productor_id)){
                            if(preg_match('/^-?(\d|[1-9]+\d*|\.\d+|0\.\d+|[1-9]+\d*\.\d+){2,7}$/', $costo)){
    
                                $sql = "UPDATE bdrecords.discos SET titulo = '$titulo', grupo_id = $grupo_id, año = '$anio', genero = '$genero', disquera_id = $disquera_id, productor_id = '$productor_id', costo = $costo WHERE disco_id = $disco_id;";

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
    
            }else{
    
                echo "  Los datos no son validos";
            }
    
        }else {
            echo "  Los datos no son validos";
        }

    }else{

        echo 'Los datos no son validos';
    }
?>
