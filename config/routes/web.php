<?php

use App\Controllers\HomeController;
use App\Controllers\Panel\DashboardController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);

    $app->get('/dashboard', [DashboardController::class, 'dashboard']);
};