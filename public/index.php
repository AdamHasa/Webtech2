<?php

/*
 * @author Antoni Bayens
 */

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);


$app->router->get('/home', 'home');
$app->router->get('/contact', 'contact');
$app->router->get('/', 'login');
$app->router->get('/exams', 'exams');
$app->router->post('/contact', function (){
    return 'handeling';
});


$app->run();


