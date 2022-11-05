<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Prestamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Prestamo</h1>
        <form action="<?= base_url('actualizar_prestamo') ?>" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">ID Prestamo</label>
                <input type="text" class="form-control" name="txt_codigo" value="<?=$datopresta['id_prestamo'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_libro" class="form-label">Código Libro</label>
                <input type="text" class="form-control" name="txt_libro" value="<?=$datopresta['codigo_libro']?>" placeholder="Ingrese libro">
            </div>
            <div class="mb-3">
                <label for="txt_carne" class="form-label">Carné</label>
                <input type="text" class="form-control" name="txt_carne" value="<?=$datopresta['carne_alumno']?>" placeholder="Ingrese carné">
            </div>
            <div class="mb-3">
                <label for="txt_fecha_prestamo" class="form-label">Fecha Prestamo</label>
                <input type="text" class="form-control" name="txt_fecha_prestamo" value="<?=$datopresta['fecha_prestamo']?>" placeholder="Ingrese fecha prestamo AAAA-MM-DD">
            </div>
            <div class="mb-3">
                <label for="txt_fecha_devolucion" class="form-label">Fecha Devolución</label>
                <input type="text" class="form-control" name="txt_fecha_devolucion" value="<?=$datopresta['fecha_devolucion']?>" placeholder="Ingrese fecha devolución AAAA-MM-DD">
            </div>
            <div class="mb-3">
                <label for="txt_usuario" class="form-label">ID Usuario</label>
                <input type="text" class="form-control" name="txt_usuario" value="<?=$datopresta['id_usuario']?>" placeholder="Ingrese ID Usuario">
            </div>
            <div class="mb-3">
                <label for="txt_empleado" class="form-label">Código Empleado</label>
                <input type="text" class="form-control" name="txt_empleado" value="<?=$datopresta['codigo_empleado']?>" placeholder="Ingrese código empleado">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" name="btn_actualizar_prestamo" value="Guardar Cambios">
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>