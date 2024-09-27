<?php
include('calcularAreas.php');

$areas = new Areas();

$info = file_get_contents("php://input");
$dataNumber = json_decode($info, true);

$areas->setNumeroUno($dataNumber['base']);
$areas->setNumeroDos($dataNumber['altura']);

$areaRectangulo[] = [
    "area_rectangulo" => $areas->rectangulo(),
    
];

header('Content-Type: application/json');
echo json_encode($areaRectangulo);
