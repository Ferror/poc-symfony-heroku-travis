<?php

use App\Presenter\DefaultController;
use App\Presenter\ResourceController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes) {
    $routes->add('index', '/')->controller(DefaultController::class);
    $routes->add('resource', '/resource')->controller(ResourceController::class);
};

