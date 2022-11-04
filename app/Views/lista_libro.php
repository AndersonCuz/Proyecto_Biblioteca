<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Lista Libro!</h1>
        <table class="table table-striped table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>codigo Libro</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Titulo</th>
                    <th>No. Paginas</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Edicion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datosLibr as $lib) :
                ?>
                    <tr>
                        <td><?= $lib['codigo_libro'] ?></td>
                        <td><?= $lib['codigo_autor'] ?></td>
                        <td><?= $lib['codigo_editorial'] ?></td>
                        <td><?= $lib['titulo'] ?></td>
                        <td><?= $lib['numero_paginas'] ?></td>
                        <td><?= $lib['tamanio'] ?></td>
                        <td><?= $lib['precio'] ?></td>
                        <td><?= $lib['codigo_estado'] ?></td>
                        <td><?= $lib['edicion'] ?></td>
                        <td>
                            Actualizar
                            /
                            Eliminar
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>