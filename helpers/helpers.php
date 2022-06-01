<?php

function isUser(){


    session_start();

    if(isset($_SESSION['usuario'])){

        $isUser = $_SESSION['usuario'];

        return $isUser;
    }
    
    return null;
}