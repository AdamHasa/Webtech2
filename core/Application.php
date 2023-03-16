<?php

/*
 * Class Application
 *
 * @author Antoni Bayens
 * @package app\core
 */

namespace app\core;

class Application
{
    public Router $router;
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }

}