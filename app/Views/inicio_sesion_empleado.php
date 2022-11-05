<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center">Empleados</h1>
        <div class="row">
            <div class="col-md-4 offset-md-4 bg-light border rounded-2">
                <?php
                /*verificar si la session existe, se crea cuando los datos del usuario son incorrectos, retornando
                    a nuevamente a esta página  
                */
                if (session('mensaje')) {
                    echo "<span class='text-danger'>".session('mensaje')."</span>";
                }
                ?>
                <br>
                <form action="<?= base_url('sesion_empleado') ?>" method="post">
                    <div class="mb-3">
                        <label for="txt_usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="txt_usuario" placeholder="Usuario">
                    </div>
                    <div class="mb-3">
                        <label for="txt_contra" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="txt_contra" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-secondary" name="btn_sesion" value="Iniciar Sesión">
                    </div>
                </form>
                <br>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>