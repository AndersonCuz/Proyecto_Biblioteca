<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Prestamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Lista Prestamos!</h1>
        <table class="table table-striped table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>codigo prestamo</th>
                    <th>codigo de libro</th>
                    <th>Carne Alumno</th>
                    <th>Fecha Prestamo</th>
                    <th>Fecha Devolicion</th>
                    <th>codigo usuario</th>
                    <th>Codigo Empledo</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datopresta as $pres) :
                ?>
                    <tr>
                        <td><?= $pres['id_prestamo'] ?></td>
                        <td><?= $pres['codigo_libro'] ?></td>
                        <td><?= $pres['carne_alumno'] ?></td>
                        <td><?= $pres['fecha_prestamo'] ?></td>
                        <td><?= $pres['fecha_devolucion'] ?></td>
                        <td><?= $pres['id_usuario'] ?></td>
                        <td><?= $pres['codigo_empleado'] ?></td>
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