<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('tambah', 'Home::tambah');
$routes->post('tambah_tugas', 'Home::tambah_tugas');

$routes->get('update_status/(:num)', 'Home::update_status/$1');

$routes->get('edit/(:num)', 'Home::edit/$1');
$routes->post('update_tugas/(:num)', 'Home::update/$1');

$routes->get('hapus/(:num)', 'Home::delete/$1');
