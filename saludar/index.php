<?php
include('libreria/saludo.php');

$saludo = new Saludo();



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saludar</title>
</head>

<body>
    <?php
    echo $saludo->saluda('Hola mundo');
    ?>
</body>

</html>