<?php

/**
 * @author Antoni Bayens
 */

namespace app\core\middlewares;

/**
 * Classh BaseMiddleware
 * @package app\core\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}