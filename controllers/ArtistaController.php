<?php

require_once 'models/Artista.php';

class ArtistaController{

    public function index(){

        Helpers::isUser();
        require_once 'views/artista/catalogo_artista.php';

    }

    public function registrar(){

        Helpers::isUser();
        require_once 'views/artista/registrar.php';

    }

    public function guardar(){

        Helpers::isUser();
        
        $nombre = strip_tags($_POST['nombre']);
        $apellido = strip_tags($_POST['apellido']);
        $pais_nacimiento = strip_tags($_POST['pais_nacimiento']);
        $fecha_nacimiento = strip_tags($_POST['fecha_nacimiento']);
        $nombre_artistico = strip_tags($_POST['nombre_artistico']);



        if(preg_match('/[A-Z a-z áéíóúñ]{2,50}/i', $nombre)){
            if(preg_match('/[A-Z a-z áéíóúñ]{2,50}/i', $apellido)){
                if(preg_match('/[A-Z a-z áéíóúñ]{2,50}/i', $pais_nacimiento)){
                    if(preg_match('/[A-Z a-z áéíóúñ]{2,50}/i', $nombre_artistico)){
                                 
                        $artista = new Artista();
                        $artista->setNombre($nombre);
                        $artista->setApellido($apellido);
                        $artista->setPais_nacimiento($pais_nacimiento);
                        $artista->setFecha_nacimiento($fecha_nacimiento);
                        $artista->setNombre_artistico($nombre_artistico);

                        $msg = $artista->guardar();

                        echo $msg;
                    }
                }
            }

        }else {
            echo "  Los datos no son validos  ";
        }

    }
}