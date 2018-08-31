<?php

namespace App;

abstract class Model {

    protected $attributes = [];
    
    protected static $fillable = [];

    protected function __construct() {}

    public function __set($key, $value) {
        $function = camel_case('set_' . $key);
        
        if (!method_exists($this, $function)) {
            return $this->attributes[$key] = $value;
        }

        $this->$function($value);
    }

    public function __get($key) {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        $function = camel_case('get_' . $key);

        if (!method_exists($this, $function)) {
            throw new \ErrorException("Undefined Property `$key`");
        }

        return $this->$function();
    }

    public static function create($data) {
        $model = new static();
        foreach(static::$fillable as $key) {
            if (array_key_exists($key, $data)) {
                $model->$key = $data[$key];
            }
        }

        return $model;
    }
}