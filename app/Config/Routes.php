<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Menu::index');
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_lineas_telefonicas', 'LineasTelefonicas::index');
$routes->get('ver_planes', 'Planes::index');
