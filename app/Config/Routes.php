<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MusicController::index');
$routes->get('/create', 'MusicController::create');
