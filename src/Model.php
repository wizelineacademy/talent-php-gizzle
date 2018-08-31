<?php

namespace App;

class Model {
    public function __set($key, $value) {
        $function = camel_case('set_' . $key);
        
        if (!method_exists($this, $function)) {
            throw new \ErrorException("Undefined Property `$key`");
        }

        $this->$function($value);
    }

    public function __get($key) {
        $function = camel_case('get_' . $key);

        if (!method_exists($this, $function)) {
            throw new \ErrorException("Undefined Property `$key`");
        }

        return $this->$function();
    }
}