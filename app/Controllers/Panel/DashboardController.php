<?php declare(strict_types=1);

namespace App\Controllers\Panel;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class DashboardController
{
    private const string MASTER_PAGE = 'panel/layout/master.php';

    public function __construct(
        private readonly PhpRenderer $renderer,
    ) {}

    public function dashboard(Request $request, Response $response): Response
    {
        $this->renderer->setLayout(self::MASTER_PAGE);

        return $this->renderer->render($response, 'panel/dashboard.php');
    }
}
