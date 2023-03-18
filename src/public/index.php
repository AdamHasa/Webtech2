<?php

use app\controllers\AboutController;
use app\controllers\SiteController;
use app\core\Application;


//require_once __DIR__ . 'FrameworkExamsoftware\vendor\autoload.php';

$app = new Application();

$app->on(Application::EVENT_BEFORE_REQUEST, function(){
     echo "Before request from second installation";
});

$app->router->get('/', function(){
    return 'Hello world';
});

$app->run();