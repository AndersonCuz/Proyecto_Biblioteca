<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Empleado</title>
	<link rel="stylesheet" href="../CSS/estiloadmin.css">
</head>

<body>
	<div class="title-cards">
		<h2>Opciones Empleado</h2>
	</div>

	<div class="container-card">
		<div class="card">
			<figure>
				<p><img src="../imagenes/icono_prestamo.png" alt="IMAGEN NO ENCONTRADA" width=""></p>
			</figure>
			<div class="contenido-card">
				<h3>Prestamos</h3>
				<p></p>
				<a href="<?= base_url('mostrar_prestamos') ?>">Entrar</a>
			</div>
		</div>
		<div class="card">
			<figure>
				<p><img src="../imagenes/icono_libro.png" alt="IMAGEN NO ENCONTRADA" width=""></p>
			</figure>
			<div class="contenido-card">
				<h3>Libros</h3>
				<p> </p>
				<a href="<?= base_url('mostrar_libros') ?>">Entrar</a>
			</div>
		</div>
	</div>
</body>

</html>