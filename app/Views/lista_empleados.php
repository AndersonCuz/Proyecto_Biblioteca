<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista Empleado!</h1>

    <table>
        <thead>
            <tr>
                <th>Codigo Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($datoemple as $empleo):
            ?>
            <tr>
                <td><?= $empleo['codigo_empleado']?></td>
                <td><?= $empleo['nombre']?></td>
                <td><?= $empleo['apellido']?></td>
                <td><?= $empleo['direccion']?></td>
                <td><?= $empleo['email']?></td>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>