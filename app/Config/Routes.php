<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Tool');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(true);


$routes->group('', ['filter'=>'AuthAdmin'], function($routes)
{

$routes->get('/test', 'Home::index');
$routes->get('/', 'Tool::index');
$routes->get('/tool', 'Tool::index');
$routes->get('/tool/index', 'Tool::index');

$routes->get('/tool/add', 'Tool::add');
$routes->get('/tool/edit', 'Tool::edit');
$routes->get('/tool/edit/(:num)', 'Tool::edit/$1');
$routes->get('/tool/delete', 'Tool::delete');
$routes->get('/tool/delete/(:num)', 'Tool::delete/$1');


});

