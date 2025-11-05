<?php

namespace app\Services;

use App\Models\GreetingModel;

class GreetingService {
    public function greeting (): GreetingModel {
        date_default_timezone_set('America/Sao_Paulo');
        $currentDayTime = Date("H:i:s", time());
        $greetingMessage = new GreetingModel();

        $greetingMessage->time = $currentDayTime;

        switch ($currentDayTime) {
            case $currentDayTime <= '12:00':
                $greetingMessage->message = "Bom dia!";
                break;
            case $currentDayTime < '18:00':
                $greetingMessage->message = "Boa tarde!";
                break;
            case $currentDayTime >= '18:00':
                $greetingMessage->message = "Boa noite!";
                break;
        }
        return $greetingMessage;
    }
}
