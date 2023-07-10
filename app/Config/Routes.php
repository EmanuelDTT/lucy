<?php

namespace Config;
use App\Controllers\UsuarioController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'UsuarioController::inicio');

/* estas son rutas de las vistas del menu principal */
$routes->add('/usuario', 'UsuarioContoller::index');
$routes->get('/inicio','UsuarioController::inicio');
$routes->get('/Menu','UsuarioController::Menu');
$routes->get('/formulario', 'UsuarioController::formulario');
$routes->get('/servicios', 'UsuarioController::servicios');
$routes->get('/acerca', 'UsuarioController::acerca');
$routes->get('/desarrollo', 'UsuarioController::desarrollo');
$routes->get('/fmContacto', 'UsuarioController::Contacto');
$routes->get('/download', 'UsuarioController::download');

/*esta ruta es para gestionar los usuarios */
$routes->get('/admin', 'CrudController::admin');

/*estas son rutas para hacer el crud, ingreso de datos, actualizació, eliminación y busqueda*/
$routes->post('/crear', 'CrudController::crear');
$routes->post('/ingresar', 'CrudController::ingresar');
$routes->get('/cerrar','CrudController::cerrar');
$routes->get('/actualizar/(:num)', 'CrudController::actualizar/$1');
$routes->get('/eliminar/(:any)', 'CrudController::eliminar/$1');
$routes->post('/editar', 'CrudController::editar');
$routes->post('/buscar', 'CrudController::buscar');


//ruta de validación ajax 

$routes->post('/validar', 'CrudController::validar');



/*estas es la ruta para mostrar error*/
$routes->get('/error', 'UsuarioController::error');



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
