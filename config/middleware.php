<?php

use App\Middlewares\RouteNameMiddleware;
use Slim\App;

return function (App $app) {

    $app->add(RouteNameMiddleware::class);

    $app->addErrorMiddleware(true, true, true);
};