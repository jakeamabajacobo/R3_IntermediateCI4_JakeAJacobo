<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Tool');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(true);


// $routes->group('', ['filter'=>'AuthAdmin'], function($routes)
// {
$routes->get('/', 'Home::index');
$routes->get('/tools', 'Tool::index');
$routes->get('/tools/index', 'Tool::index');

$routes->get('/tools/add', 'Tool::add');
$routes->get('/tools/edit', 'Tool::edit');
$routes->get('/tools/edit/(:num)', 'Tool::edit/$1');
$routes->get('/tools/delete', 'Tool::delete');
$routes->get('/tools/delete/(:num)', 'Tool::delete/$1');

// });

