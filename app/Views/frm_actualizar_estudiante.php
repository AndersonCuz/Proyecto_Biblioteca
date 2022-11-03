<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Estudiante</h1>
        <form action="<?= base_url('actualizar_estudiante') ?>" method="post">
            <div class="mb-3">
                <label for="txt_carne" class="form-label">Carné</label>
                <input type="text" class="form-control" name="txt_carne" value="<?=$datoestudiante['carne_alumno'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txt_nombre" value="<?=$datoestudiante['nombre']?>" placeholder="Ingrese nombre">
            </div>
            <div class="mb-3">
                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="txt_apellido" value="<?=$datoestudiante['apellido']?>" placeholder="Ingrese apellido">
            </div>
            <div class="mb-3">
                <label for="txt_direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="txt_direccion" value="<?=$datoestudiante['direccion']?>" placeholder="Ingrese dirección">
            </div>
            <div class="mb-3">
                <label for="txt_telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="txt_telefono" value="<?=$datoestudiante['telefono']?>" placeholder="Ingrese teléfono">
            </div>
            <div class="mb-3">
                <label for="txt_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="txt_email" value="<?=$datoestudiante['email']?>" placeholder="Ingrese email">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" name="btn_actualizar_estudiante" value="Guardar Cambios">
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>