<?php

namespace App\Http\Controllers;

use app\Services\GreetingService;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function index (GreetingService $greeter): string
    {
        $user = "Aluno";
        $greetingMessage = $greeter->greeting();

        return "Olá, {$user}, são {$greetingMessage->time}! Tenha um(a) {$greetingMessage->message}!";
    }
}
