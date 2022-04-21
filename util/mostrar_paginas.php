<?php
require_once "matematica.php";

function home() {
    $contenido = '<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <!-- CSS only -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="util/pi.php">Pi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca">Acerca de</a>
                    </li>
                </ul>
            </nav>
            <form action="util/calculadora.php" method="GET">
    
                <label class="form-label"> Ingrese X: </label>
                <input class="form-control" type="text" name="operadorX" required>
    
                <label class="form-label"> Ingrese Y: </label>
                <input type="text" class="form-control" name="operadorY" required>
    
                <label class="form-label"> Operación </label>
                <select name="operacion" class="form-control">
                    <option selected> -- Seleccione --</option>
                    <option value=1>Sumar</option>
                    <option value=2>Restar</option>
                    <option value=3>Dividir</option>
                    <option value=4>Multiplicar</option>
                </select>
    
                <input type="submit" value="Calcular">
            </form>
        </div>
    </body>
    
    </html>';


    echo $contenido;

}

function acerca() {
    $contenido = '<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <!-- CSS only -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pi">Pi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                </ul>
            </nav>
            <h1>Acerca de</h1>
            <p>Alumnos de TUDAI Lobería 2022</p>
        </div>
    </body>
    
    </html>';

    echo $contenido;

}

function mostrarPi() {
    
    $pi = valorPi();

    $contenido = '<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <!-- CSS only -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pi">Pi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca">Acerca de</a>
                    </li>
                </ul>
            </nav>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>Valor de PI</h1>
                    <p>El valor de Pi es '.$pi.'</p>
                </div>
            </div>
        </div>
    </body>
    
    </html>';

    echo $contenido;
}