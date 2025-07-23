<?php declare(strict_types=1);

namespace App\Middlewares;

use App\Core\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RouteNameMiddleware implements MiddlewareInterface
{
    public function __construct(
        private readonly Router $router,
    ) {}

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->router->parser();

        return $handler->handle($request);
    }
}
