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
    function setDate($date) {
        $this->date = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * @return string Y-m-d
     */
     function getDate() {
        return $this->date->format('Y-m-d');
    }
}