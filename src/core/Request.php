<?php

namespace app\core;

class Request
{
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}