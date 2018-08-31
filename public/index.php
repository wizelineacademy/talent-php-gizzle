<?php

require_once __DIR__ . '/../vendor/autoload.php';

$event = new \App\Event('PHP Advanced (CMS) Certification');
$event->date = '2018-08-30';

echo "Event: $event->title, When: $event->date";