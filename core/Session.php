<?php

namespace app\core;

/**
 * Class Session
 *
 * @author Antoni Bayens
 * @package app\core
 */

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function setFlash($key, $message)
    {
        //$_SESSION[]
    }

    public function getFlash($key)
    {

    }
}