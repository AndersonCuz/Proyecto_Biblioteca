<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') ?>">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
</head>

<body>
    <div class="container">
        <h1>Lista Libros!</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Libros
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Libro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_libro') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label">Código Libro</label>
                                <input type="text" class="form-control" name="txt_codigo" placeholder="Ingrese código libro">
                            </div>
                            <div class="mb-3">
                                <label for="txt_autor" class="form-label">Código Autor</label>
                                <input type="text" class="form-control" name="txt_autor" placeholder="Ingrese autor">
                            </div>
                            <div class="mb-3">
                                <label for="txt_editorial" class="form-label">Código Editorial</label>
                                <input type="text" class="form-control" name="txt_editorial" placeholder="Ingrese editorial">
                            </div>
                            <div class="mb-3">
                                <label for="txt_titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" name="txt_titulo" placeholder="Ingrese título">
                            </div>
                            <div class="mb-3">
                                <label for="txt_paginas" class="form-label">Número de Páginas</label>
                                <input type="text" class="form-control" name="txt_paginas" placeholder="Ingrese número de páginas">
                            </div>
                            <div class="mb-3">
                                <label for="txt_tamanio" class="form-label">Tamaño</label>
                                <input type="text" class="form-control" name="txt_tamanio" placeholder="Ingrese tamaño">
                            </div>
                            <div class="mb-3">
                                <label for="txt_precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="txt_precio" placeholder="Ingrese precio">
                            </div>
                            <div class="mb-3">
                                <label for="txt_estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" name="txt_estado" placeholder="Ingrese estado">
                            </div>
                            <div class="mb-3">
                                <label for="txt_edicion" class="form-label">Edición</label>
                                <input type="text" class="form-control" name="txt_edicion" placeholder="Ingrese edición">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control" name="btn_guardar_libro" value="Agregar Libro">
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
        <hr>
        <hr>
        <table class="table table-striped table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>Código Libro</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Titulo</th>
                    <th>No. Páginas</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Edición</th>
                    <th>Prestamo</th>
                </tr>
            </thead>

            <body>
                <?php
                foreach ($datosLibr as $libs) :
                ?>
                    <tr>
                        <td><?php echo $libs['codigo_libro']; ?></td>
                        <td><?= $libs['codigo_autor'] ?></td>
                        <td><?= $libs['codigo_editorial'] ?></td>
                        <td><?= $libs['titulo'] ?></td>
                        <td><?= $libs['numero_paginas'] ?></td>
                        <td><?= $libs['tamanio'] ?></td>
                        <td><?= $libs['precio'] ?></td>
                        <td><?= $libs['codigo_estado'] ?></td>
                        <td><?= $libs['edicion'] ?></td>
                        <td>
                            <a href="<?= base_url('agregar_prestamo') ?>">Solicitud de prestamo</a>
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