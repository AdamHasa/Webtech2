<?php

namespace core\form;

use app\core\Model;

/**
 * Class Field
 *
 * @author Antoni Bayens
 * @package app\core\form
 */

class Field
{
    public Model $model;
    public string $attribute;

    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }


}