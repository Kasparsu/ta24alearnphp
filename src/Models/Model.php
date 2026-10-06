<?php

namespace App\Models;

use App\DB;

abstract class Model {
    public $id;
    public static $table;

    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
    public static function where($field, $value){
        $db = new DB();
        return $db->where(static::$table, static::class, $field, $value);
    }
}