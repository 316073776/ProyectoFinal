<?php

require_once 'models/Disco.php';
require_once 'models/Grupo.php';
require_once 'models/Disquera.php';
require_once 'models/Productor.php';

class DiscoController{

    public function index(){

        Helpers::isUser();
        require_once 'views/discos/catalogo_discos.php';
    }

    public function registrar(){

        Helpers::isUser();
        $grupo = new Grupo();
        $grupos = $grupo->obtenerTodos();
        $grupos = pg_fetch_all($grupos, PGSQL_ASSOC);

        $disquera = new Disquera();
        $disqueras = $disquera->obtenerTodos();
        $disqueras = pg_fetch_all($disqueras, PGSQL_ASSOC);

        $productor = new Disquera();
        $productores = $productor->obtenerTodos();
        $productores = pg_fetch_all($productores, PGSQL_ASSOC);

        require_once 'views/discos/registrar.php';
    }

    public function guardar(){

        Helpers::isUser();

        if($_POST){

            $titulo = strip_tags($_POST['titulo']);
            $grupo_id = strip_tags($_POST['grupo_id']);
            $anio = strip_tags($_POST['anio']);
            $genero = strip_tags($_POST['genero']);
            $disquera_id = strip_tags($_POST['disquera_id']);
            $productor_id = strip_tags($_POST['productor_id']);
            $costo = strip_tags($_POST['costo']);
    
    
            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $titulo)){
                if(preg_match('/^[1-9][0-9]{1,10}$/i', $grupo_id)){
                    if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $genero)){
                        if(preg_match('/^[1-9][0-9]{0,10}$/i', $disquera_id)){
                            if(preg_match('/^[1-9][0-9]{0,10}$/i', $productor_id)){
                                if(preg_match('/^-?(\d|[1-9]+\d*|\.\d+|0\.\d+|[1-9]+\d*\.\d+){2,7}$/', $costo)){
    
                                    $disco = new Disco();
                                    $disco->setTitulo($titulo);
                                    $disco->setGrupo_id($grupo_id);
                                    $disco->setAnio($anio);
                                    $disco->setGenero($genero);
                                    $disco->setDisquera_id($disquera_id);
                                    $disco->setProductor_id($productor_id);
                                    $disco->setCosto($costo);
                                    $msg = $disco->guardar();
    
                                    echo $msg;
    
                                }
                            }
                        }
                    }
                }
            }
            else {
                echo "  Los datos no son validos  ";
            }


        }
       

    }
}