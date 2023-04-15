<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 *
 * @author Antoni Bayens
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Antoni Bayens",
            'id' => "1"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function examinfo()
    {
        return $this->render('examinfo');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        return 'Handling submitted data';
    }
}