<?php

/*
 * Class Application
 *
 * @author Antoni Bayens
 * @package app\core
 */

namespace app\core;

use app\database\database;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public database $db;
    public static Application $app;
    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

        $this->db = new database($config['db']);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

}