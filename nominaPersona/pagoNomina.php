<?php
include('libreria/salario.php');
include('libreria/pagoPersona.php');
include('libreria/persona.php');

// Obtener los valores del formulario
$valor = $_POST['txtValorDia'];
$dia = $_POST['txtDiasTrabajados'];
$nombrePersona = $_POST['txtNombrePersona'];

// objeto persona y establece nombre
$persona = new Persona();
$persona->setNombrePersona($nombrePersona);

//objeto salario, establece dia y valor
$salarioPersona = new Salario($dia, $valor);
$salarioPersona->setDiasTrabajados($dia);
$salarioPersona->setValorDia($valor);

//objeto PagoPersona
$pago = new PagoPersona($salarioPersona, $salarioPersona);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('principal/head.php'); ?>
</head>

<body>
    <div class="container mt-5">
        <div class="fondoNomina">

            <h1 class="mb-4 d-flex justify-content-center">Pago Nómina <i class="fa-solid fa-clipboard-user"></i></h1>


            <div class="row posiciones">
                <div class="col-md-4">Nombre:</div>
                <div class="col-md-8">
                    <?php echo $persona->getNombrePersona(); ?>
                </div>
            </div>


            <div class="row posiciones">
                <div class="col-md-4">Días Trabajados:</div>
                <div class="col-md-2">
                    <?php echo $salarioPersona->getDiasTrabajados(); ?>
                </div>
                <div class="col-md-4">Valor Día:</div>
                <div class="col-md-1">
                    <?php echo $salarioPersona->getValorDia(); ?>
                </div>
            </div>


            <div class="row posiciones">
                <div class="col-md-4">Pago Salud:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularSalud(); ?>
                </div>
                <div class="col-md-4">Pago Pensión:</div>
                <div class="col-md-1">
                    <?php echo $pago->calcularPension(); ?>
                </div>
            </div>


            <div class="row posiciones">
                <div class="col-md-4">Pago ARL:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularArl(); ?>
                </div>
                <div class="col-md-4">Salario:</div>
                <div class="col-md-1">
                    <?php echo $pago->calcularSalario(); ?>
                </div>
            </div>


            <div class="row posiciones">
                <div class="col-md-4">Descuentos:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularDescuentos(); ?>
                </div>
                <div class="col-md-4">Pago Total:</div>
                <div class="col-md-1">
                    <?php echo $pago->calcularPagoFinal(); ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>