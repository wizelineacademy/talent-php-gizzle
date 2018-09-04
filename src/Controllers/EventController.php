<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;

class EventController {

    public function all() {
        return new JsonResponse([
            [
                'title' => 'Event Name'
            ]
        ]);
    }

    public function find(int $id) {
        return new JsonResponse($id);
    }
}