<?php 

require_once 'models/Grupo.php';

class GrupoController{

   
    public function index(){

        Helpers::isUser();
        require_once 'views/grupo/catalogo_grupos.php';
    }

    public function registrar(){

        Helpers::isUser();
        require_once 'views/grupo/registrar.php';
    }

    public function guardar(){

        Helpers::isUser();

        if(isset($_POST)){

            $nombre = strip_tags($_POST['nombre']);
            $pais_origen = strip_tags($_POST['pais_origen']);


            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){

                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $pais_origen)){
                            
                    $grupo = new Grupo();
                    $grupo->setNombre($nombre);
                    $grupo->setPais_origen($pais_origen);
                    $msg = $grupo->guardar();

                    echo $msg;
                }

            }else {
                echo "  Los datos no son validos  ";
            }

        }
        
    }
}