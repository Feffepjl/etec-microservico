<?php

namespace App\Models;


class GreetingModel
{
    public string $time {
        get {
            return $this->time;
        }
        set {
            $this->time = $value;
        }
    }
    public string $message {
        get {
            return $this->message;
        }
        set {
            $this->message = $value;
        }
    }


    public function __construct() {}

}
