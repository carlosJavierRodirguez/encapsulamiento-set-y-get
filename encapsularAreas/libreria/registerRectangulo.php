<?php
include('calcularAreas.php');

$areas = new Areas;

$info = file_get_contents("php://input");
$dataNumber = json_decode($info);

$areas->setNumeroUno($dataNumber['baseRectangulo']);
$areas->setNumeroDos($dataNumber['alturaRectangulo']);

$areaRectangulo[] = [
    "area" => $areas->rectangulo(),
    
];

header('Content-Type: application/json');
echo json_encode($areaRectangulo);
