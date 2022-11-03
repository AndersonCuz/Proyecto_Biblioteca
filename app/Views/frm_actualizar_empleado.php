<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Empleado</h1>
        <form action="<?= base_url('actualizar_empleado') ?>" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código</label>
                <input type="text" class="form-control" name="txt_codigo" value="<?=$datoemple['codigo_empleado'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txt_nombre" value="<?=$datoemple['nombre']?>" placeholder="Ingrese nombre">
            </div>
            <div class="mb-3">
                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="txt_apellido" value="<?=$datoemple['apellido']?>" placeholder="Ingrese apellido">
            </div>
            <div class="mb-3">
                <label for="txt_direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="txt_direccion" value="<?=$datoemple['direccion']?>" placeholder="Ingrese dirección">
            </div>
            <div class="mb-3">
                <label for="txt_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="txt_email" value="<?=$datoemple['email']?>" placeholder="Ingrese email">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" name="btn_actualizar_empleado" value="Guardar Cambios">
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>