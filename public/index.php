<?php

require_once __DIR__ . '/../vendor/autoload.php';

$event = \App\Event::create([
    'title' => 'PHP Advanced (CMS) Certification',
    'date' => '2018-08-30',
]);

echo "Event: $event->title, When: $event->date";
