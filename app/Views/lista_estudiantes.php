<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista Estudiantes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">

  <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
  <!--datables estilo bootstrap 4 CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') ?>">
  <!--font awesome con CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
</head>

<body>
  <div class="container">
    <h1>Lista Estudiantes!</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Agregar Estudiante
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Estudiante</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('agregar_estudiante') ?>" method="post">
              <div class="mb-3">
                <label for="txt_carne" class="form-label">Carn??</label>
                <input type="text" class="form-control" name="txt_carne" placeholder="Ingrese carn??">
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
                <label for="txt_direccion" class="form-label">Direcci??n</label>
                <input type="text" class="form-control" name="txt_direccion" placeholder="Ingrese direcci??n">
              </div>
              <div class="mb-3">
                <label for="txt_telefono" class="form-label">Tel??fono</label>
                <input type="text" class="form-control" name="txt_telefono" placeholder="Ingrese tel??fono">
              </div>
              <div class="mb-3">
                <label for="txt_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="txt_email" placeholder="Ingrese email">
              </div>
              <div class="mb-3">
                <input type="submit" class="form-control" name="btn_guardar_estudiante" value="Guardar Estudiante">
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
    <hr>
    <hr>
    <table class="table table-striped table-hover" id="dataTable">
      <thead>
        <tr>
          <th>Carn??</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Direccion</th>
          <th>Tel??fono</th>
          <th>Email</th>
          <th>Acciones</th>
        </tr>
      </thead>

      <body>
        <?php
        foreach ($datoestudiante as $estud) :
        ?>
          <tr>
            <td><?php echo $estud['carne_alumno']; ?></td>
            <td><?= $estud['nombre'] ?></td>
            <td><?= $estud['apellido'] ?></td>
            <td><?= $estud['direccion'] ?></td>
            <td><?= $estud['telefono'] ?></td>
            <td><?= $estud['email'] ?></td>
            <td>
              <a href="<?= base_url('datos_estudiante/' . $estud['carne_alumno']) ?>">
                <i class="bi bi-pencil-square"></i>
              </a>
              |
              <a href="<?= base_url('eliminar_estudiante/' . $estud['carne_alumno']) ?>">
                <i class="bi bi-trash"></i>
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
  <!-- c??digo JS prop??o-->
  <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>