<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista Estudiantes!</h1>

    <table>
        <thead>
            <tr>
                <th>Carne Alumno</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($datoestudiante as $estud):
            ?>
            <tr>
                <td><?= $estud['carne_alumno']?></td>
                <td><?= $estud['nombre']?></td>
                <td><?= $estud['apellido']?></td>
                <td><?= $estud['direccion']?></td>
                <td><?= $estud['telefono']?></td>
                <td><?= $estud['email']?></td>
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