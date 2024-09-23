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
                <div class="col-md-4"><i class="fa-solid fa-user"></i> Nombre:</div>
                <div class="col-md-8">
                    <?php echo $persona->getNombrePersona(); ?>
                </div>
            </div>


            <div class="row posiciones">
                <div class="col-md-4"><i class="fa-solid fa-calendar-days"></i> Días Trabajados:</div>
                <div class="col-md-2">
                    <?php echo $salarioPersona->getDiasTrabajados(); ?>
                </div>
                <div class="col-md-4"><i class="fa-solid fa-person-cane"></i> Pago Pensión:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularPension(); ?>
                </div>

            </div>

            <div class="row posiciones">
                <div class="col-md-4"><i class="fa-solid fa-money-check-dollar"></i> Valor del Día:</div>
                <div class="col-md-2">
                    <?php echo $salarioPersona->getValorDia(); ?>
                </div>
                <div class="col-md-4"><i class="fa-solid fa-user-doctor"></i> Pago Salud:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularSalud(); ?>
                </div>

            </div>


            <div class="row posiciones">
                <div class="col-md-4"><i class="fa-solid fa-money-bill"></i> Salario:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularSalario(); ?>
                </div>
                <div class="col-md-4"><i class="fa-solid fa-person-falling-burst"></i> Pago ARL:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularArl(); ?>
                </div>

            </div>


            <div class="row posiciones">
                <div class="col-md-4"><i class="fa-solid fa-sack-dollar"></i> Pago Total:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularPagoFinal(); ?>
                </div>
                <div class="col-md-4"><i class="fa-solid fa-percent"></i> Descuentos:</div>
                <div class="col-md-2">
                    <?php echo $pago->calcularDescuentos(); ?>
                </div>

            </div>
        </div>
    </div>

</body>

</html>