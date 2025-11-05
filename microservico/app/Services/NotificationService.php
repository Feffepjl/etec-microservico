<?php

namespace app\Services;

class NotificationService {

    public function send($user, $message): string
    {
        return "Notificação enviada para {$user}: {$message}";
    }
}
