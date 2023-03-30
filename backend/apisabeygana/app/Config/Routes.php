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


//api
$routes->group('api',['namespace'=>'App\Controllers\API'],function($routes){
    

    
    $routes->get('user', 'User::index');/* muestra todos los usuarios */
    $routes->get('main', 'User::main'); /* sumatoria para las estadisticas del main */
    $routes->post('user/register', 'User::register');
    
    $routes->get('softwareafiliado', 'Softwareafiliado::index');/* muestra todos los software afiliados */
    $routes->post('softwareafiliado/registrar', 'Softwareafiliado::registrar');/* registrar software afiliados */
    
    $routes->get('serviciodigital', 'Serviciodigital::index');/* Muestra todos los servicios digitales */
    
    $routes->get('saldo', 'Saldo::index'); /* muestra todos los movimientos de los saldos */
    $routes->post('saldo/recarga', 'Saldo::recarga'); /*Recarga de saldo*/
    
    $routes->get('operaciones', 'Operaciones::index');/* muestra todos los tipos de operaciones */

    $routes->get('bitacora', 'Bitacora::index');/* muestra todos los campos registrados en la bitacora como eventos del sistema */
});

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
