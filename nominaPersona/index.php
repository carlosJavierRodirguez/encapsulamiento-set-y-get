<?php
    include('libreria/salario.php');
    include('libreria/pagoPersona.php')

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include('principal/head.php');
?>

</head>

<body>
    <div class="container">
        <br>
        <h1>Calcular Nomina <i class="fa-solid fa-clipboard-user"></i></h1>
        <br>
        <form class="row g-3 " action="pagoNomina.php" method="post">
            <div class="col-md-12 row">

                <div class="col-md-2"> Nombre completo:</div>
                <div class="col-md-5">
                    <input type="text" class="form-control is-valid " min="0" id="txtNombrePersona" name="txtNombrePersona" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="col-md-12 row">

                <div class="col-md-2"> Dias Trabajados:</div>
                <div class="col-md-2">
                    <input type="text" class="form-control is-valid" min="0" id="txtDiasTrabajados" name="txtDiasTrabajados" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-1"> Valor Dia:</div>
                <div class="col-md-2">
                    <input type="text" class="form-control is-valid" min="0" id="txtValorDia" name="txtValorDia" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                <button class="btn btn-primary " type="submit">Calcular <i class="fa-solid fa-calculator"></i>
                </button>
            </div>
        </form>
    </div>
</body>

</html>