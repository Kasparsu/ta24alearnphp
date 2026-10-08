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

    public static function find($id){
        $db = new DB();
        return $db->find(static::$table, static::class, $id);
    }

    public function save(){
        $db = new DB();
        $fields = get_object_vars($this);
        unset($fields['id']);
        unset($fields['created_at']);
        unset($fields['updated_at']);
        if($this->id) {
            $db->update(static::$table, $fields, $this->id);
        } else {
            $db->insert(static::$table, $fields);
        }
    }

    public function delete() {
        $db = new DB();
        $db->delete(static::$table, $this->id);
    }
}