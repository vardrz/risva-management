<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/paket/(:any)?', 'Home::paket/$1');
$routes->get('/galeri/(:any)?', 'Home::galeri/$1');
$routes->get('/testimoni/(:any)?', 'Home::testimoni/$1');
