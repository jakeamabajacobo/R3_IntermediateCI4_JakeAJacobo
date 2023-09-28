<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/item', 'Item::index');

$routes->setDefaultController('Item');
$routes->SetDefaultMethod('index');
$routes->setAutoRoute(true);