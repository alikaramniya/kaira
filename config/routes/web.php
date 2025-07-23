<?php

use App\Controllers\HomeController;
use App\Controllers\Panel\Auth\AuthController;
use App\Controllers\Panel\DashboardController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index'])->setName('home');

    $app->get('/dashboard', [DashboardController::class, 'dashboard'])->setName('dashboard');

    $app->get('/login', [AuthController::class, 'login'])->setName('login');
    $app->get('/register', [AuthController::class, 'register'])->setName('register');
};