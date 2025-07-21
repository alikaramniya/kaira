<?php

use App\Core\Config;
use App\Core\DB;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Slim\Factory\AppFactory;
use Slim\App;

use function DI\create;

return [
    App::class => function (ContainerInterface $container) {
        $router     = require CONFIG_PATH . 'routes/web.php';
        $middleware = require CONFIG_PATH . 'middleware.php';

        AppFactory::setContainer($container);

        $app = AppFactory::create();

        $router($app);
        $middleware($app);

        return $app;
    },
    Config::class => create(Config::class)->constructor(require CONFIG_PATH . '/app.php'),
    Logger::class => function () {
        $log = new Logger('system');

        return $log->pushHandler(new StreamHandler(STORAGE_PATH . 'logs/php.log', Level::Debug));
    },
    DB::class => fn(Config $config, Logger $log) => new DB($config, $log),
];
