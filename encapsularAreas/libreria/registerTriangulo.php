<?php
include('calcularAreas.php');

$areas = new Areas();

$info = file_get_contents("php://input");
$dataNumber = json_decode($info, true);

$areas->setNumeroUno($dataNumber['base']);
$areas->setNumeroDos($dataNumber['altura']);

$areaTriangulo[] = [
    "area_triangulo" => $areas->triangulo(),
    
];

header('Content-Type: application/json');
echo json_encode($areaTriangulo);
