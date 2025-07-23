<?php declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class HomeController
{
    public function __construct(
        private readonly PhpRenderer $renderer,
    ) {}

    public function index(Request $request, Response $response): Response
    {
        $this->renderer->setLayout('default/layout/master.php');

        return $this->renderer->render($response, 'welcome.php');
    }
}
