<?php
include('libreria/operaciones.php');
$operaciones = new Operaciones
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>

<body>
    <?php
    echo "Suma: " . $operaciones->sumar(5, 4) . "<br>";
    echo "Resta: " . $operaciones->resta(5, 4) . "<br>";
    echo "Multiplicación: " . $operaciones->multiplicacion(5, 4) . "<br>";
    echo "División: " . $operaciones->division(5, 4);
    ?>
</body>

</html>