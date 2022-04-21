<?php

    $action = $_GET['action'];

    $parametros = explode('/', $action);

    print_r($parametros);

    switch ($parametros[0]) {
        case 'suma': {
            $a = $parametros[1];
            $b = $parametros[2];
            echo ("Ud. eligió suma de $a y $b"); 
            
        }break;
        case 'resta': echo ('Ud. eligió resta'); break;
        default: echo ('Ud. no eligio nada'); break;

    }

    // ['suma', 1, 2]
