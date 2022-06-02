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

function obtenerNombreGrupo($id){

    global $con;

    $sql = "SELECT nombre FROM bdrecords.grupos WHERE grupo_id = $id;";
    $result = pg_query($con, $sql);
    $grupo = pg_fetch_assoc($result);

    return $grupo;

}

function obtenerNombreDisquera($id){

    global $con;

    $sql = "SELECT nombre FROM bdrecords.disqueras WHERE disquera_id = $id;";
    $result = pg_query($con, $sql);
    $disquera = pg_fetch_assoc($result);

    return $disquera;

}


function obtenerNombreProductor($id){

    global $con;

    $sql = "SELECT nombre FROM bdrecords.productores WHERE productor_id = $id;";
    $result = pg_query($con, $sql);
    $productor = pg_fetch_assoc($result);

    return $productor;

}