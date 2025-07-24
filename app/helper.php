<?php

use Psr\Http\Message\ServerRequestInterface as Request;

if (!function_exists('route')) {
    function route(string $url) {
        $request = $_SERVER['REQUEST_URI'];

        return $request === $url ? '#' : $url;
    }
}