<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('principal/head.php'); ?>
</head>

<body>
    <div class="container">
        <div class="col-12 row fondoAreas">
            <div class="d-flex justify-content-center">
                <h1>Calcular Áreas Geométricas</h1>
            </div>

            <!-- Modal Cuadrado -->
            <div class="col-3">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalCuadrado">
                    <img src="img/cuadrado.png" class="imagenes" alt="Cuadrado">
                </button>
            </div>
            <div class="modal fade" id="modalCuadrado" tabindex="-1" aria-labelledby="modalCuadradoLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Calcular Área del Cuadrado</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form id="areaCuadrado">
                                <div class="mb-3">
                                    <label for="ladoCuadrado" class="form-label">Lado del Cuadrado:</label>
                                    <input type="number" name="ladoCuadrado" id="ladoCuadrado" class="form-control" required>
                                </div>
                                <div>
                                    <label for="resultadoCuadrado" class="form-label">Resultado:</label>
                                    <div class="resultadoCuadrado">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="calcularCuadrado" class="btn btn-primary">Calcular</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Rectángulo -->
            <div class="col-3">
                <button type="button" class="btn d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modalRectangulo">
                    <img src="img/rectangulo.png" class="imagenes " alt="Rectángulo">
                </button>
            </div>
            <div class="modal fade" id="modalRectangulo" tabindex="-1" aria-labelledby="modalRectanguloLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Calcular Área del Rectángulo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="baseRectangulo" class="form-label">Base:</label>
                                    <input type="number" name="baseRectangulo" id="baseRectangulo" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alturaRectangulo" class="form-label">Altura:</label>
                                    <input type="number" name="alturaRectangulo" id="alturaRectangulo" class="form-control" required>
                                </div>
                                <div>
                                    <label for="resultadoRectangulo" class="form-label">Resultado:</label>
                                    <p><?php echo $areaRectangulo; ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="calcularRectangulo" class="btn btn-primary">Calcular</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Triángulo -->
            <div class="col-3">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalTriangulo">
                    <img src="img/triangulo.png" class="imagenes" alt="Triángulo">
                </button>
            </div>
            <div class="modal fade" id="modalTriangulo" tabindex="-1" aria-labelledby="modalTrianguloLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Calcular Área del Triángulo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="baseTriangulo" class="form-label">Base:</label>
                                    <input type="number" name="baseTriangulo" id="baseTriangulo" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alturaTriangulo" class="form-label">Altura:</label>
                                    <input type="number" name="alturaTriangulo" id="alturaTriangulo" class="form-control" required>
                                </div>
                                <div>
                                    <label for="resultadoTriangulo" class="form-label">Resultado:</label>
                                    <p><?php echo $areaTriangulo; ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="calcularTriangulo" class="btn btn-primary">Calcular</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Círculo -->
            <div class="col-3">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalCirculo">
                    <img src="img/circulo-amarillo.png" class="imagenes" alt="Círculo">
                </button>
            </div>
            <div class="modal fade" id="modalCirculo" tabindex="-1" aria-labelledby="modalCirculoLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Calcular Área del Círculo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="radioCirculo" class="form-label">Radio:</label>
                                    <input type="number" name="radioCirculo" id="radioCirculo" class="form-control" required>
                                </div>
                                <div>
                                    <label for="resultadoCirculo" class="form-label">Resultado:</label>
                                    <p><?php echo $areaCirculo; ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="calcularCirculo" class="btn btn-primary">Calcular</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="js/cuadrado.js"></script>
</body>

</html>