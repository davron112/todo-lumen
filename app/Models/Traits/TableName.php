<?php
namespace App\Models\Traits;

trait TableName
{
    /**
     * Get model related table name.
     *
     * @return mixed
     */
    public static function getTableName()
    {
        $class = self::class;

        return with(new $class())->getTable();
    }
}
