<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Prestamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') ?>">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
</head>

<body>
    <div class="container">
        <h1>Lista Prestamos!</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Prestamo
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Prestamo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_prestamo') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label">ID Prestamo</label>
                                <input type="text" class="form-control" name="txt_codigo" placeholder="Ingrese ID">
                            </div>
                            <div class="mb-3">
                                <label for="txt_libro" class="form-label">Código Libro</label>
                                <input type="text" class="form-control" name="txt_libro" placeholder="Ingrese libro">
                            </div>
                            <div class="mb-3">
                                <label for="txt_carne" class="form-label">Carné Alumno</label>
                                <input type="text" class="form-control" name="txt_carne" placeholder="Ingrese carné">
                            </div>
                            <div class="mb-3">
                                <label for="txt_fecha_prestamo" class="form-label">Fecha Prestamo</label>
                                <input type="text" class="form-control" name="txt_fecha_prestamo" placeholder="Ingrese fecha prestamo AAAA-MM-DD">
                            </div>
                            <div class="mb-3">
                                <label for="txt_fecha_devolucion" class="form-label">Fecha Devolución</label>
                                <input type="text" class="form-control" name="txt_fecha_devolucion" placeholder="Ingrese fecha devolución AAAA-MM-DD">
                            </div>
                            <div class="mb-3">
                                <label for="txt_usuario" class="form-label">ID Usuario</label>
                                <input type="text" class="form-control" name="txt_usuario" placeholder="Ingrese ID Usuario">
                            </div>
                            <div class="mb-3">
                                <label for="txt_empleado" class="form-label">Código Empleado</label>
                                <input type="text" class="form-control" name="txt_empleado" placeholder="Ingrese código de empleado">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control" name="btn_guardar_prestamo" value="Solicitar Prestamo">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-striped table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>ID Prestamo</th>
                    <th>Código de Libro</th>
                    <th>Carne Alumno</th>
                    <th>Fecha Prestamo</th>
                    <th>Fecha Devolución</th>
                    <th>ID Usuario</th>
                    <th>Código Empleado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <body>
                <?php
                foreach ($datopresta as $pres) :
                ?>
                    <tr>
                        <td><?php echo $pres['id_prestamo']; ?></td>
                        <td><?= $pres['codigo_libro'] ?></td>
                        <td><?= $pres['carne_alumno'] ?></td>
                        <td><?= $pres['fecha_prestamo'] ?></td>
                        <td><?= $pres['fecha_devolucion'] ?></td>
                        <td><?= $pres['id_usuario'] ?></td>
                        <td><?= $pres['codigo_empleado'] ?></td>
                        <td>
                            <a href="<?= base_url('datos_prestamo/' . $pres['id_prestamo']) ?>">
                                Actualizar
                            </a>
                            /
                            <a href="<?= base_url('eliminar_prestamo/' . $pres['id_prestamo']) ?>">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </body>
        </table>

    </div>

    <!--datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js') ?>"></script>

    <!-- para usar botones en datatables JS -->
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('datatables/JSZip-2.5.0/jszip.min.js') ?>"></script>
    <script src="<?= base_url('datatables/pdfmake-0.1.36/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('datatables/pdfmake-0.1.36/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/buttons.html5.min.js') ?>"></script>
    <!-- código JS propìo-->
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>