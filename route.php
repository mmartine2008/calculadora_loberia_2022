<?php
    require_once('util/mostrar_paginas.php');

    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    $parametros = explode('/', $action);

    switch ($action) {
        case 'home': home(); break;
        case 'acerca': acerca(); break;
        case 'pi': mostrarPi(); break;
        case 'suma': {
            $a = $parametros[1];
            $b = $parametros[2];
            echo ("Ud. eligió suma de $a y $b"); 
            
        }break;
        case 'resta': echo ('Ud. eligió resta'); break;
        default: echo ('Ud. eligio '.$action); break;

    }

    // ['suma', 1, 2]
