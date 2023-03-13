<?php

require_once __DIR__.'/vendor/autoload.php';
use \app\core\Application;

$app = new Application();

$app->router->get('/', funtion(){
    return 'Hello World';
});

$app->router->get('/profile', funtion(){
    return 'profile';
});


$app->run();