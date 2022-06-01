<?php

require_once 'models/Compositor.php';

class CompositorController{

    public function index(){

        Helpers::isUser();

        require_once 'views/compositor/catalogo_compositores.php';
    }

    public function registrar(){

        Helpers::isUser();

        require_once 'views/compositor/registrar.php';
    }

    public function guardar(){

        Helpers::isUser();

        if(isset($_POST)){

            $nombre = strip_tags($_POST['nombre']);
            $apellido = strip_tags($_POST['apellido']);
            $pais_nacimiento = strip_tags($_POST['pais_nacimiento']);
            $fecha_nacimiento = strip_tags($_POST['fecha_nacimiento']);


            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $apellido)){

                    if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $pais_nacimiento)){
                             
                        $compositor = new Compositor();
                        $compositor->setNombre($nombre);
                        $compositor->setApellido($apellido);
                        $compositor->setPais_nacimiento($pais_nacimiento);
                        $compositor->setFecha_nacimiento($fecha_nacimiento);

                        $msg = $compositor->guardar();

                        echo $msg;

                    }
                }

            }else {
                echo "  Los datos no son validos  ";
            }
        }

    }
}