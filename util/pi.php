<?php
require_once "matematica.php";

$pi = valorPi();
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
                <h1>Valor de PI</h1>
                <p><?php echo "El valor de Pi es $pi"; ?></p>
            </div>
        </div>
    </div>
</body>

</html>