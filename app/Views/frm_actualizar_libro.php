<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Libro</h1>
        <form action="<?= base_url('actualizar_libro') ?>" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código Libro</label>
                <input type="text" class="form-control" name="txt_codigo" value="<?=$datosLibr['codigo_libro'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_autor" class="form-label">Código Autor</label>
                <input type="text" class="form-control" name="txt_autor" value="<?=$datosLibr['codigo_autor']?>" placeholder="Ingrese autor">
            </div>
            <div class="mb-3">
                <label for="txt_editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="txt_editorial" value="<?=$datosLibr['codigo_editorial']?>" placeholder="Ingrese editorial">
            </div>
            <div class="mb-3">
                <label for="txt_titulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="txt_titulo" value="<?=$datosLibr['titulo']?>" placeholder="Ingrese título">
            </div>
            <div class="mb-3">
                <label for="txt_paginas" class="form-label">Número de Páginas</label>
                <input type="text" class="form-control" name="txt_paginas" value="<?=$datosLibr['numero_paginas']?>" placeholder="Ingrese número de páginas">
            </div>
            <div class="mb-3">
                <label for="txt_tamanio" class="form-label">Tamaño</label>
                <input type="text" class="form-control" name="txt_tamanio" value="<?=$datosLibr['tamanio']?>" placeholder="Ingrese tamaño">
            </div>
            <div class="mb-3">
                <label for="txt_precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="txt_precio" value="<?=$datosLibr['precio']?>" placeholder="Ingrese precio ">
            </div>
            <div class="mb-3">
                <label for="txt_estado" class="form-label">Código Estado</label>
                <input type="text" class="form-control" name="txt_estado" value="<?=$datosLibr['codigo_estado']?>" placeholder="Ingrese estado">
            </div>
            <div class="mb-3">
                <label for="txt_edicion" class="form-label">Edición</label>
                <input type="text" class="form-control" name="txt_edicion" value="<?=$datosLibr['edicion']?>" placeholder="Ingrese edición">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" name="btn_actualizar_libro" value="Guardar Cambios">
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>