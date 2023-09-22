<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/register', 'Home::register');
$routes->post('/filter', 'Home::filter');
$routes->post('/delete', 'Home::delete');
$routes->post('/edit', 'Home::edit');
$routes->get('/login', 'Login::index');
$routes->post('/signin', 'Login::signin');
