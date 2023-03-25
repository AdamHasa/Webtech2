<?php

/*
 * @author Antoni Bayens
 */

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application(dirname(__DIR__));


$app->router->get('/home', 'home');
$app->router->get('/contact', 'contact');
$app->router->get('/', 'login');
$app->router->get('/exams', 'exams');
$app->router->post('/contact', function (){
    return 'handeling';
});


$app->run();


