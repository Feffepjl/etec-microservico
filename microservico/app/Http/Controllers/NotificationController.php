<?php

namespace App\Http\Controllers;

use app\Services\NotificationService;

class NotificationController extends Controller
{
    public function notify( NotificationService $service): string
    {

        return $service->send("Juliana", "Sua compra foi confirmada");
    }
}
