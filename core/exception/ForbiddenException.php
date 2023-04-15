<?php

namespace app\core\exception;

/**
 * Class Forbidden Exception
 *
 * @author Antoni Bayens
 * @package app\core\exception
 */

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}