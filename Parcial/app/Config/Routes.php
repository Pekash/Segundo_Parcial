<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// La ruta raíz muestra el formulario de login
$routes->get('/', 'AuthController::index');

// Ruta para procesar el formulario de login
$routes->post('login/auth', 'AuthController::login');

// Ruta de Inicio (página principal de la aplicación)
$routes->get('home', 'Home::index');

// --- Rutas originales para productos ---
// Rutas para Zapatos
$routes->get('Z1', 'ControladorZapatos::index');
$routes->get('Z2', 'ControladorZapatos::casual');

// Rutas para Vestidos
$routes->get('V1', 'ControladorVestidos::fiesta');
$routes->get('V2', 'ControladorVestidos::formal');

// Rutas para Carteras
$routes->get('C1', 'ControladorCarteras::mano');
$routes->get('C2', 'ControladorCarteras::hombro');

// --- Ruta Dinámica para Productos ---
// Captura una categoría (texto) y un id (número)
$routes->get('(:any)/(:num)', 'ProductController::show/$1/$2');
