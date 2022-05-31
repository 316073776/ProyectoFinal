<?php

require_once 'models/Usuario.php';


class UsuarioController{

    public function index(){

        require_once 'views/usuario/login.php';
    }

    public function registrar(){

        require_once 'views/usuario/registrar.php';

    }

    public function guardar(){

        if(isset($_POST)){

            $username = strip_tags($_POST['username']);
            $nombre = strip_tags($_POST['nombre']);
            $apaterno = strip_tags($_POST['apaterno']);
            $amaterno = strip_tags($_POST['amaterno']);
            $contrasena = strip_tags($_POST['contrasena']);
        
            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $username)){
            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $nombre)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $apaterno)){
                    if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $amaterno)){
                        if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $contrasena)){
        
                            $usuario = new Usuario();
                            $usuario->setUsername($username);
                            $usuario->setNombre($nombre);
                            $usuario->setApaterno($apaterno);
                            $usuario->setAmaterno($amaterno);
                            $usuario->setContrasena($contrasena);

                            $msg = $usuario->guardar();

                            echo $msg;
                            
                        }
                    }
                }
            }
            }else {

                echo "Los datos no son validos";
            }
        }
    }

    public function login(){

       if(isset($_POST)){

            $username = $_POST['username'];
            $contrasena = $_POST['contrasena'];

            if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $username)){
                if(preg_match('/[A-Za-z áéíóúñ]{2,50}/i', $contrasena)){

                    $usuario = new Usuario();
                    $usuario->setUsername($username);
                    $usuario->setContrasena($contrasena);

                    $isUser = $usuario->login();

                    if($isUser && is_object($isUser)){

                        $_SESSION['usuario'] = $isUser;
                        echo true;

                    }else{

                        echo $isUser;

                    }
                }
            }
       }

    }

    public function logout(){

        if(isset($_SESSION['usuario'])){

            unset($_SESSION['usuario']);
            $_SESSION['usuario'] = null;
        }

        header('Location: ' . URL);
    }

   
}