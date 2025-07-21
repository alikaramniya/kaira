<?php

function bool_val($value)
{
    if ($value === 'true') {
        return true;
    }

    if ($value === 'false') {
        return false;
    }
}

return [
    'app_name'      => $_ENV['APP_NAME'],
    'display_error' => bool_val($_ENV['APP_DEBUG']),
    'connection'    => [
        'driver'   => $_ENV['DB_DRIVER'] ?? 'mysql',
        'host'     => $_ENV['DB_HOST'],
        'user'     => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'dbname'   => $_ENV['DB_DATABSE'],
        'charset'  => $_ENV['DB_CHARSET'] ?? 'utf8mb4',
        'options'  => $_ENV['DB_OPTIONS'] ?? [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
            \PDO::ATTR_EMULATE_PREPARES   => false
        ],
    ],
];
