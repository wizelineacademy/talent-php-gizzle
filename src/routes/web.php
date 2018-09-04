<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('events', (new Route('/events', [
    '_controller' => 'App\Controllers\EventController::all'
]))->setMethods(['GET']));

$routes->add('event', (new Route('/events/{id}', [
    '_controller' => 'App\Controllers\EventController::find'
]))->setMethods(['GET']));

return $routes;