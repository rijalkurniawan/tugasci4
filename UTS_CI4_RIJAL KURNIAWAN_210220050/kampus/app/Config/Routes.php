<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/dosen', 'Dosen::index');


// nama = rijal url bebas

//UPDATE VIEW
$routes->get('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->get('/dosen/update/(:num)', 'Dosen::update/$1');


//EDIT PROSES
$routes->post('/mahasiswa/edit', 'Mahasiswa::edit/$1');
$routes->post('/dosen/edit', 'Dosen::edit/$1');

//CREATE VIEW
$routes->add('/mahasiswa/create', 'Mahasiswa::create/$1');
$routes->add('/dosen/create', 'Dosen::create/$1');

//INSERT PROSES
$routes->post('/mahasiswa/insert', 'Mahasiswa::insert');
$routes->post('/dosen/insert', 'Dosen::insert');

//DELETE
$routes->add('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
$routes->add('/dosen/delete/(:num)', 'Dosen::delete/$1');

//REGISTER & LOGIN
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
