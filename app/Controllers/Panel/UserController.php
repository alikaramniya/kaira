<?php declare(strict_types=1);

namespace App\Controllers\Panel;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class UserController
{
    public function __construct(
        private readonly PhpRenderer $renderer
    ) {}

    public function index(Request $request, Response $response): Response
    {
        $this->renderer->setLayout('panel/layout/master.php');

        return $this->renderer->render($response, 'panel/user/list.php', ['parent' => 'کاربران', 'child' => 'لیست کاربران', 'title' => 'لیست کاربران']);
    }
}
