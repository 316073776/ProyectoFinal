<?php 

require_once 'models/Productor.php';

class ProductorController{

    public function index(){

        Helpers::isUser();

        require_once 'views/productor/catalogo_productor.php';
    }

    public function registrar(){

        Helpers::isUser();

        require_once 'views/productor/registrar.php';

    }

    public function guardar(){

        Helpers::isUser();
        
        if(isset($_POST)){

            $nombre = strip_tags($_POST['nombre']);
            $apellido = strip_tags($_POST['apellido']);
            $fecha_nacimiento = strip_tags($_POST['fecha_nacimiento']);


            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){

                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $apellido)){
                         
                    $productor = new Productor();
                    $productor->setNombre($nombre);
                    $productor->setApellido($apellido);
                    $productor->setFecha_nacimiento($fecha_nacimiento);
                    $msg = $productor->guardar();

                    echo $msg;
                }

            }else {
                echo "  Los datos no son validos  ";
            }
        }

    }
}