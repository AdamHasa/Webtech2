<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

/**
 * Class AuthController
 *
 * @author Antoni Bayens
 * @package app\controllers
 */

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $errors = [];
        if ($request->isPost()){
            $registerModel = new RegisterModel();

            $firstname = $request->getBody()['firstname'];
            if (!$firstname){
                $errors['firstname'] = 'This field is required';
            }
            if (!$firstname){
                $errors['firstname'] = 'This field is required';
            }

            echo '<pre>';
            var_dump($errors);
            echo '</pre>';
            exit;
            return $this->render('register', [
                'errors' => $errors
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'errors' => $errors
        ]);
    }

}