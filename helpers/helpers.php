<?php

require_once 'conexion.php';

function isUser(){


    session_start();

    if(isset($_SESSION['usuario'])){

        $isUser = $_SESSION['usuario'];

        return $isUser;
    }
    
    return null;
}

function obtenerProductores(){

    global $con;
    $sql = "SELECT * FROM bdrecords.productores";
    $productores = pg_query($con, $sql);
    $productores = pg_fetch_all($productores, PGSQL_ASSOC);

    return $productores;
}

function obtenerGrupos(){

    global $con;

    $sql = "SELECT * FROM bdrecords.grupos";
    $grupos = pg_query($con, $sql);
    $grupos = pg_fetch_all($grupos, PGSQL_ASSOC);

    return $grupos;
}

function obtenerDisqueras(){

    global $con;

    $sql = "SELECT * FROM bdrecords.disqueras";
    $disqueras = pg_query($con, $sql);
    $disqueras = pg_fetch_all($disqueras, PGSQL_ASSOC);

    return $disqueras;
}

function obtenerDiscos(){

    global $con;
    $sql = "SELECT * FROM bdrecords.discos";
    $discos = pg_query($con, $sql);
    $discos = pg_fetch_all($discos, PGSQL_ASSOC);

    return $discos;
}
