<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function __construct(
        private readonly UserRepository $userRepository
    ) {}

    public function index(Request $request, Response $response): Response
    {
        var_dump($this->userRepository->all());

        $response->getBody()->write('message for test');

        return $response;
    }
}
