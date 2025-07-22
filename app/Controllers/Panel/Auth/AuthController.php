<?php declare(strict_types=1);

namespace App\Controllers\Panel\Auth;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class AuthController
{
    public function __construct(
        private readonly PhpRenderer $renderer
    ) {}

    public function login(Request $request, Response $response): Response
    {
        $this->renderer->setLayout('default/layout/master.php');

        return $this->renderer->render($response, 'default/auth/login.php');
    }

    public function register(Request $request, Response $response): Response
    {
        $this->renderer->setLayout('default/layout/master.php');

        return $this->renderer->render($response, 'default/auth/register.php');
    }
}
