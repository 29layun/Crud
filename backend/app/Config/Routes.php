<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Crud::index');
$routes->get('/obtener/(:any)', 'Crud::obtener/$1');
$routes->get('/eliminar/(:any)', 'Crud::eliminar/$1');
$routes->post('/crear', 'Crud::crear');
$routes->post('/actualizar', 'Crud::actualizar');
$routes->post('/terminar', 'Crud::terminar');

