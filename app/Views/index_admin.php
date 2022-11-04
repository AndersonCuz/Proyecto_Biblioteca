<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administrador</title>
	<link rel="stylesheet" href="../CSS/estiloadmin.css">
</head>
<body>
<div class="title-cards">
		<h2>Opciones Administrador</h2>
	</div>
<div class="container-card">
	
<div class="card">
	<figure>
	    <p><img src="../imagenes/icono_empleado.png" alt="IMAGEN NO ENCONTRADA" width=""></p>
	</figure>
	<div class="contenido-card">
		<h3>Empleados</h3>
		<p>Podemos crear la identidad corporativa de tu empresa. Diseño , Maquetación de folletos, Catálogos, Papelería y mucho más.</p>
		<a href="<?= base_url('mostrar_empleados')?>">Entrar</a>
	</div>
</div>
<div class="card">
	<figure>
	    <p><img src="../imagenes/icono_estudiante.png" alt="IMAGEN NO ENCONTRADA" width=""></p>
	</figure>
	<div class="contenido-card">
		<h3>Estudiantes</h3>
		<p>Nosotros creamos y optimizamos tus perfiles en las Redes Sociales. Importantes para que tu presencia online sea completa.</p>
		<a href="<?= base_url('mostrar_estudiantes')?>">Entrar</a>
	</div>
</div>
</body>
</html>