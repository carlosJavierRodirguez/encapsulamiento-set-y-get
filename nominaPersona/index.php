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
    <div class="container mt-5">
        <div class="fondoNomina p-4">
            <h1 class="mb-4 d-flex justify-content-center">Calcular Nómina <i class="fa-solid fa-clipboard-user"></i></h1>

            <form class="row g-3" action="pagoNomina.php" method="post">

                <div class="col-md-12 mb-3">
                    <label for="txtNombrePersona" class="form-label">Nombre completo:</label>
                    <input type="text" class="form-control" id="txtNombrePersona" name="txtNombrePersona" required>
                </div>


                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="txtDiasTrabajados" class="form-label">Días Trabajados:</label>
                            <input type="number" class="form-control" min="0" id="txtDiasTrabajados" name="txtDiasTrabajados" required>
                        </div>
                        <div class="col-md-6">
                            <label for="txtValorDia" class="form-label">Valor Día:</label>
                            <input type="number" class="form-control" min="0" id="txtValorDia" name="txtValorDia" required>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Calcular <i class="fa-solid fa-calculator"></i></button>
                </div>
            </form>
        </div>
    </div>
</body>


</html>