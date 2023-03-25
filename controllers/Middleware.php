<?php

namespace app\controllers;

abstract class Middleware
{
    abstract public function execute();
}