<?php

namespace  app\core;

class Router
{
    public Request $request;
    protected  array $routes = [];

    public function __construct(app\core\Request $request){
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();
        $method = $this->request->getMethod();
        $path = null;
        $callback = $this->routes= [$method][$path] ;
    }

}