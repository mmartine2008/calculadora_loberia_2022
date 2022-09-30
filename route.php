<?php
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    require_once('util/mostrar_paginas.php');
    require_once('util/matematica.php');

    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    $parametros = explode('/', $action);

    switch ($parametros[0]) {
        case 'home': home(); break;
        case 'acerca': acerca(); break;
        case 'pi': mostrarPi(); break;
        case 'suma': {
            $a = $parametros[1];
            $b = $parametros[2];
            $resultado = sumar($a, $b);
            echo($resultado);
        }break;
        case 'resta': {
            $a = $parametros[1];
            $b = $parametros[2];
            $resultado = restar($a, $b);
            echo($resultado);
        }break;
        default: echo ('Ud. eligio '.$action); break;

    }
?>