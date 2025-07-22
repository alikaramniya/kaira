<?php

use App\Controllers\HomeController;
use App\Controllers\Panel\Auth\AuthController;
use App\Controllers\Panel\DashboardController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);

    $app->get('/dashboard', [DashboardController::class, 'dashboard']);

    $app->get('/login', [AuthController::class, 'login']);
    $app->get('/register', [AuthController::class, 'register']);
};