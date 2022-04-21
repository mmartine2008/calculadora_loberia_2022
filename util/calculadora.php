<?php
    require_once "matematica.php";

    /**
    * Por el arreglo $_GET, llegan estos valores:
    * Array ( [operadorX] => 5 [operadorY] => 9 [operacion] => 1 ) 
    */
    $operacion = $_GET['operacion'];
    $x = $_GET['operadorX'];
    $y = $_GET['operadorY'];

    switch ($operacion) {
        case 1:
            $resultado = sumar($x, $y);
            break;
        case 2:
            $resultado = restar($x, $y);
            break;
        case 3:
            if ($y != 0) {
                $resultado = dividir($x, $y);
            } else {
                echo "<p>No se puede dividir por cero</p>";    
            }
            
            break;
        case 4:
            $resultado = multiplicar($x, $y);
            break;

        default:
            echo "<p>No se seleccionó operación</p>";
            break;
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html">Calculadora</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pi.php">Pi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../acercade.html">Acerca de</a>
                </li>
            </ul>
        </nav>
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Resultado</h1>
                <p><?php echo "El resultado es $resultado"; ?></p>
            </div>
        </div>
    </div>
</body>

</html>  