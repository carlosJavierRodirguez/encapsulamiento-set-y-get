<?php
include('libreria/operaciones.php');
include('libreria/numero.php');

$numeroUno = new Numero(5); //ESTABLECER
$numeroDos = new Numero(10);

$operaciones = new Operaciones($numeroUno, $numeroDos);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con encapsulamiento</title>
</head>

<body>
    <?php
    echo "Suma: " . $operaciones->sumar() . "<br>";
    echo "Resta: " . $operaciones->restar() . "<br>";
    echo "Multiplicación: " . $operaciones->multiplicar() . "<br>";
    echo "División: " . $operaciones->division();
    ?>
</body>

</html>