<?php

require_once 'models/Disquera.php';

class DisqueraController{

    public function index(){

        Helpers::isUser();

        require_once 'views/disquera/catalogo_disqueras.php';
    }

    public function registrar(){

        Helpers::isUser();

        require_once 'views/disquera/registrar.php';
    }

    public function guardar(){

        Helpers::isUser();

        if(isset($_POST)){

            $nombre = strip_tags($_POST['nombre']);
            $pais = strip_tags($_POST['pais']);


            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){

                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $pais)){
                        
                    $disquera = new Disquera();
                    $disquera->setNombre($nombre);
                    $disquera->setPais($pais);
                    $msg = $disquera->guardar();

                    echo $msg;

                }

            }else {
                echo "  Los datos no son validos  ";
            }
        }
    }
}