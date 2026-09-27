<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Étape A : endpoint écrit à la main
$routes->group('api', function ($routes) {
    $routes->group('v1',['namespace' => 'App\Controllers\Api'], function ($routes) {
        $routes->get('manuel/livres/(:num)', 'Api\LivresManuel::show/$1');
        $routes->get('livres/(:num)', 'Api\Livres::show/$1');
        $routes->resource('livres', ['except' => 'new,edit']);
    });
});

// $routes->get('api/manuel/livres/(:num)', 'Api\LivresManuel::show/$1');

// Étape B : la ressource complète (new et edit servent des formulaires HTML, inutiles pour une API)
// $routes->resource('api/livres', ['except' => 'new,edit']);
