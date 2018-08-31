<?php

namespace App;

use Carbon\Carbon;

class Event {
    public $title;

    protected $date;

    function __construct($title) {
        $this->title = $title;
    }

    /**
     * @param string $date Y-m-d
     */
    protected function setDate($date) {
        $this->date = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * @return string Y-m-d
     */
    protected function getDate() {
        return $this->date->format('Y-m-d');
    }

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