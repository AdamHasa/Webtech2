<?php

namespace app\core;

/**
 * Class Response
 *
 * @author Antoni Bayens
 */

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

}