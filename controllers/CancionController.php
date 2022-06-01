<?php

require_once 'models/Cancion.php';

class CancionController{

    public function index(){

        Helpers::isUser();
        require_once 'views/cancion/catalogo_canciones.php';
        
    }

    public function registrar(){

        Helpers::isUser();
        require_once 'views/cancion/registrar.php';
    }

    public function guardar(){

        Helpers::isUser();

        if(isset($_POST)){


            $titulo = strip_tags($_POST['titulo']);


            if(preg_match('/[A-Z a-z áéíóúñ]{2,50}/i', $titulo)){

                $cancion = new Cancion();
                $cancion->setTitulo($titulo);
                $msg = $cancion->guardar();

                echo $msg;

                
            }else {
                echo "  Los datos no son validos  ";
            }
        }

    }
}