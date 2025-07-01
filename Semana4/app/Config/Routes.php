<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);

// Rutas para Zapatos
$routes->get('Z1', 'ControladorZapatos::index');
$routes->get('Z2', 'ControladorZapatos::casual');

// Rutas para Vestidos
$routes->get('V1', 'ControladorVestidos::fiesta');
$routes->get('V2', 'ControladorVestidos::formal');

// Rutas para Carteras
$routes->get('C1', 'ControladorCarteras::mano');
$routes->get('C2', 'ControladorCarteras::hombro');
