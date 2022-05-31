<?php

function autocargarControllers($classname) {

    include 'controllers/' . $classname . '.php';
}

spl_autoload_register('autocargarControllers');