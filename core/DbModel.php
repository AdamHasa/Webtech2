<?php
/**
 * @author Antoni Bayens
 */

namespace app\core;

/**
 * Class DbModel
 * @package app\core
 */

abstract class DbModel extends Model
{
    abstract public function tableName(): string;

    abstract public function attributes(): array;

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();

        Application::$app->db->pdo->prepare();
    }
}