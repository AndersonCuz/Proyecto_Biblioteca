<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista Empleados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">

  <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
  <!--datables estilo bootstrap 4 CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') ?>">
  <!--font awesome con CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
</head>

<body>
  <div class="container">
    <h1>Lista Empleados!</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Agregar Empleado
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Empleado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('agregar_empleado') ?>" method="post">
              <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código</label>
                <input type="text" class="form-control" name="txt_codigo" placeholder="Ingrese código">
              </div>
              <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txt_nombre" placeholder="Ingrese nombre">
              </div>
              <div class="mb-3">
                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="txt_apellido" placeholder="Ingrese apellido">
              </div>
              <div class="mb-3">
                <label for="txt_direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="txt_direccion" placeholder="Ingrese dirección">
              </div>
              <div class="mb-3">
                <label for="txt_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="txt_email" placeholder="Ingrese email">
              </div>
              <div class="mb-3">
                <input type="submit" class="form-control" name="btn_guardar_empleado" value="Guardar Empleado">
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
    <table class="table table-striped table-hover" id="dataTable">
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

      <body>
        <?php
        foreach ($datoemple as $empleo) :
        ?>
          <tr>
            <td><?php echo $empleo['codigo_empleado']; ?></td>
            <td><?= $empleo['nombre'] ?></td>
            <td><?= $empleo['apellido'] ?></td>
            <td><?= $empleo['direccion'] ?></td>
            <td><?= $empleo['email'] ?></td>
            <td>
              <a href="<?= base_url('datos_empleado/' . $empleo['codigo_empleado']) ?>">
                Actualizar
              </a>
              /
              <a href="<?= base_url('eliminar_empleado/' . $empleo['codigo_empleado']) ?>">
                Eliminar
              </a>
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