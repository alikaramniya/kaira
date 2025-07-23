<?php declare(strict_types=1);

namespace App\Core;

use Slim\Views\PhpRenderer;
use Slim\App;
use Slim\Interfaces\RouteParserInterface;

class Router
{
    private RouteParserInterface $routeParser;

    public function __construct(
        private readonly PhpRenderer $renderer,
        private readonly App $app,
    ) {
        $this->routeParser = $this->app->getRouteCollector()->getRouteParser();
    }

    public function parser()
    {
        $this->renderer->addAttribute('router', $this->routeParser);
    }

    public function toRoute(string $name): string
    {
        return $this->routeParser->urlFor($name);
    }
}
