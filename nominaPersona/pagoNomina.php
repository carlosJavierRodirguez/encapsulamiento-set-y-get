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


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('principal/head.php');?>
</head>

<body>
    <div class="container">
        <div class="fondoNomina">
            <br>
            <h1 class="d-flex justify-content-center">Pago Nomina <i class="fa-solid fa-clipboard-user"></i></h1>
            <div class="col-md-12 row">

                <div class="col-md-2 "> Nombre:</div>
                <div class="col-md-10 d-flex justify-content-start">
                    <?php
                    echo $persona->getNombrePersona();
                    ?>
                </div>
            </div>
            <div class="col-md-12 row">

                <div class="col-md-2"> Dias Trabajados:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    echo $salarioPersona->getDiasTrabajados();
                    ?>
                </div>
                <div class="col-md-2"> Valor Dia:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    echo $salarioPersona->getValorDia();
                    ?>
                </div>
            </div>
            <div class="col-md-12 row">

                <div class="col-md-2"> Pago Salud:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    // echo $salud;
                    ?>
                </div>
                <div class="col-md-2"> Pago Pensión:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    // echo $pension;
                    ?>
                </div>
            </div>
            <div class="col-md-12 row">

                <div class="col-md-2"> Pago Arl:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    // echo $arl;
                    ?>
                </div>
                <div class="col-md-2"> Salario:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    // echo $salarioCalculado;
                    ?>
                </div>
            </div>
            <div class="col-md-12 row">

                <div class="col-md-2"> Descuentos:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    // echo $descuentos;
                    ?>
                </div>
                <div class="col-md-2"> Pago Total:</div>
                <div class="col-md-1 d-flex justify-content-start">
                    <?php
                    // echo $pagoFinal;
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>