<?php

class Helpers{


    public static function isUser(){

        if(!isset($_SESSION['usuario'])) header('Location:'. URL);
    }
}