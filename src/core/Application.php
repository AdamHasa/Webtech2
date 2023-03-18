<?php

namespace  app\core;

class Application
{
    public Router $router;
    public Request $request;
    const EVENT_BEFORE_REQUEST = 'beforeRequest';
    const EVENT_AFTER_REQUEST = 'afterRequest';
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router();

    }

    public function run(){
        $this->router->resolve();
    }
}