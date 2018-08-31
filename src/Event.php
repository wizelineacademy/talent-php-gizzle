<?php

namespace App;

use Carbon\Carbon;

class Event extends Model{

    protected static $fillable = [
        'date',
        'title'
    ];
    
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
}