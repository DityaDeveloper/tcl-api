<?php

/* test response */
$router->get('/ping', [ 'as' => 'ping', function () use ($router) {
    return 'silent is golden';
}]);

/* lumen version */
$router->get('/version', [ 'as' => 'version', function () use ($router) {
    return $router->app->version();
}]);
