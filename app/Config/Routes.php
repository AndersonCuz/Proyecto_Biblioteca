<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
//inicio de sesion

$routes->get('irasesiones', 'IraSesion::irasesion');
$routes->post('entrarsesion', 'validar::entrarSesiones');
//fin de incio de sesion
$routes->get('cargar_usuario', 'Home::verUsuarios');
$routes->get('Cargar_Estudiante', 'Cargado_Estudiante::verEstudiante');
$routes->get('cargar_admin', 'Cargado_admin::verAdmin');
$routes->get('cargar_Empleado', 'Cargar_Empleado::verEmpleados');

/* fin de pantallas*/
$routes->get('mostrar_empleados', 'Empleado::mostra_empleado');
$routes->post('agregar_empleado', 'Empleado::agregarEmpleado');
$routes->get('eliminar_empleado/(:num)', 'Empleado::eliminarEmpleado/$1');
$routes->get('datos_empleado/(:num)', 'Empleado::verDatosEmpleado/$1');
$routes->post('actualizar_empleado', 'Empleado::actualizarEmpleado');

$routes->get('mostrar_estudiantes', 'Estudiante::mostrar_estudiante');
$routes->post('agregar_estudiante', 'Estudiante::agregarPrestamo');
$routes->get('eliminar_estudiante/(:num)', 'Estudiante::eliminarEstudiante/$1');
$routes->get('datos_estudiante/(:num)', 'Estudiante::verDatosEstudiante/$1');
$routes->post('actualizar_estudiante', 'Estudiante::actualizarEstudiante');
//union de tablas prestamos
$routes->get('mostrar_prestamos', 'Prestamo::mostrar_prestamo');
$routes->post('agregar_prestamo', 'Prestamo::agregarPrestamo');
$routes->get('eliminar_prestamo/(:num)', 'Prestamo::eliminarPrestamo/$1');
$routes->get('datos_prestamo/(:num)', 'Prestamo::verDatosPrestamo/$1');
$routes->post('actualizar_prestamo', 'Prestamo::actualizarPrestamo');
//union de tablas libros
$routes->get('mostrar_libros', 'Libro::mostrar_libro');
$routes->post('agregar_libro', 'Libro::agregarLibro');
$routes->get('eliminar_libro/(:num)', 'Libro::eliminarLibro/$1');
$routes->get('datos_libro/(:num)', 'Libro::verDatosLibro/$1');
$routes->post('actualizar_libro', 'Libro::actualizarLibro');
