<?php

namespace app\controllers;

use controllers\Middleware;

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var controllers\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \thecodeholic\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}