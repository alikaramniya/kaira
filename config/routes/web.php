<?php

use App\Controllers\HomeController;
use App\Controllers\Panel\Auth\AuthController;
use App\Controllers\Panel\DashboardController;
use App\Controllers\Panel\UserController;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index'])->setName('home');

    
    $app->group('/admin', function (RouteCollectorProxy $panel) {
        $panel->get('/dashboard', [DashboardController::class, 'dashboard'])->setName('dashboard');

        $panel->group('/user', function (RouteCollectorProxy $user) {
            $user->get('', [UserController::class, 'index'])->setName('users.index');
        });
    });
    

    $app->get('/login', [AuthController::class, 'login'])->setName('login');
    $app->get('/register', [AuthController::class, 'register'])->setName('register');
};