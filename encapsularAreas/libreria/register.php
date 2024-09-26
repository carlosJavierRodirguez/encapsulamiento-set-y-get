<?php
include('calcularAreas.php');

$areas = new Areas;

$info = file_get_contents("php://input");
$dataNumber = json_decode($info, true);

$operaciones->setNumeroUno($dataNumber['ladoCuadrado']);

$dataOperaciones[] = [
    "Area del Cuadrado" => $operaciones->cuadrado(),
];

header('Content-Type: application/json');
echo json_encode($dataOperaciones);
?>
