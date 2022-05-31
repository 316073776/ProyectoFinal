<?php

require_once 'autoload.php';
require_once 'config/Db.php';
require_once 'config/config.php';
require_once 'helpers/Helpers.php';
require_once 'views/templates/header.php';


function show_error(){

    $error = new ErrorController();
    $error->index();

}

if(isset($_GET['controller'])){

    $nombre_controlador = $_GET['controller'] . 'Controller';

}else if(!isset($_GET['controller']) && !isset($_GET['action'])){

    $nombre_controlador = CONTROLLER_DEFAULT;

}else{

    show_error();
    exit();
}

if(class_exists($nombre_controlador)){

    $controller = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){

        $action = $_GET['action'];
        $controller->$action();

    }else if(!isset($_GET['controller']) && !isset($_GET['action'])){

        $action = ACTION_DEFAULT;
        $controller->$action();

    }else{

        show_error();
    }
    
}else{

    show_error();
}

require_once 'views/templates/footer.php';
