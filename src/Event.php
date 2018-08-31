<?php

namespace App;

class Event {
    public $title;

    function __construct($title) {
        $this->title = $title;
    }
}