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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');
$routes->get('/berita', 'Berita::index');
$routes->get('/daerah', 'Daerah::index');
$routes->get('/kategori', 'Kategori::index');
$routes->get('/pengguna', 'Pengguna::index');

// nama = rijal url bebas

//UPDATE VIEW
$routes->get('/berita/update/(:num)', 'Berita::update/$1');
$routes->get('/daerah/update/(:num)', 'Daerah::update/$1');
$routes->get('/kategori/update/(:num)', 'Kategori::update/$1');
$routes->get('/pengguna/update/(:num)', 'Pengguna::update/$1');

//EDIT PROSES
$routes->post('/berita/edit', 'Berita::edit/$1');
$routes->post('/daerah/edit', 'Daerah::edit/$1');
$routes->post('/kategori/edit', 'Kategori::edit/$1');
$routes->post('/pengguna/edit', 'Pengguna::edit/$1');

//CREATE VIEW
$routes->add('/berita/create', 'Berita::create/$1');
$routes->add('/daerah/create', 'Daerah::create/$1');
$routes->add('/kategori/create', 'Kategori::create/$1');
$routes->add('/pengguna/create', 'Pengguna::create/$1');

//INSERT PROSES
$routes->post('/berita/insert', 'Berita::insert');
$routes->post('/daerah/insert', 'Daerah::insert');
$routes->post('/kategori/insert', 'Kategori::insert');
$routes->post('/pengguna/insert', 'Pengguna::insert');

//DELETE
$routes->add('/berita/delete/(:num)', 'Berita::delete/$1');
$routes->add('/daerah/delete/(:num)', 'Daerah::delete/$1');
$routes->add('/kategori/delete/(:num)', 'Kategori::delete/$1');
$routes->add('/pengguna/delete/(:num)', 'Pengguna::delete/$1');

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
