<?php
include('calcularAreas.php');

$areas = new Areas();

$info = file_get_contents("php://input");
$dataNumber = json_decode($info, true);

$areas->setNumeroUno($dataNumber['radio']);

$areaCirculo[] = [
    "area_circulo" => $areas->cuadrado(),
];

header('Content-Type: application/json');
echo json_encode($areaCirculo);
?>