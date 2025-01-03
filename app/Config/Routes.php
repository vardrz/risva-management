<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/paket/(:any)?', 'Home::paket/$1');
$routes->get('/galeri/(:any)?', 'Home::galeri/$1');
$routes->get('/testimoni/(:any)?', 'Home::testimoni/$1');


// Admin
$routes->get('/admin/home', 'Admin::index');
$routes->get('/admin/login', 'Admin::login');
$routes->post('/admin/auth', 'Admin::auth');
$routes->get('/admin/logout', 'Admin::logout');

// Admin Profil
$routes->get('/admin/profile', 'ProfileController::index');
$routes->post('/admin/profile/save', 'ProfileController::save');
$routes->post('/admin/profile/logo', 'ProfileController::logo');

// Admin Paket
$routes->get('/admin/paket', 'PaketController::index');
$routes->post('/admin/paket/save', 'PaketController::save');
$routes->post('/admin/paket/update/(:num)', 'PaketController::update/$1');
$routes->get('/admin/paket/delete/(:num)', 'PaketController::delete/$1');
$routes->post('/admin/paket/image', 'PaketController::image');

// Admin Item Paket
$routes->post('/admin/item_paket/save', 'ItemPaketController::save');
$routes->post('/admin/item_paket/update/(:num)', 'ItemPaketController::update/$1');
$routes->get('/admin/item_paket/delete/(:num)', 'ItemPaketController::delete/$1');

// Admin Galeri
$routes->get('/admin/galeri', 'GaleriController::index');
$routes->get('/admin/galeri/add', 'GaleriController::add');
$routes->get('/admin/galeri/add-video', 'GaleriController::addVideo');
$routes->post('/admin/galeri/save', 'GaleriController::save');
$routes->post('/admin/galeri/save-video', 'GaleriController::saveVideo');
$routes->get('/admin/galeri/edit/(:num)', 'GaleriController::edit/$1');
$routes->post('/admin/galeri/update/(:num)', 'GaleriController::update/$1');
$routes->post('/admin/galeri/update-video/(:num)', 'GaleriController::updateVideo/$1');
$routes->get('/admin/galeri/delete/(:num)', 'GaleriController::delete/$1');

// Admin Testi
$routes->get('/admin/testi', 'TestiController::index');
$routes->get('/admin/testi/add', 'TestiController::add');
$routes->post('/admin/testi/save', 'TestiController::save');
$routes->get('/admin/testi/edit/(:num)', 'TestiController::edit/$1');
$routes->post('/admin/testi/update/(:num)', 'TestiController::update/$1');
$routes->get('/admin/testi/delete/(:num)', 'TestiController::delete/$1');