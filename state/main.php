<?php

namespace App\state;

require_once __DIR__ . "/sleep.php";
require_once __DIR__ . "/main.php";
require_once __DIR__ . "/coding.php";
require_once __DIR__ . "/playing.php";
require_once __DIR__ . "/reading.php";
require_once __DIR__ . "/interface.php";

class developer 
{
    public $activity;

    public function setActivity($activity) {
        $this->activity = $activity;
    }

    public function changeActivity() {
        if ($this->activity instanceof sleep) {
            $this->setActivity(new coding());
        } elseif ($this->activity instanceof coding) {
            $this->setActivity(new playing());
        } elseif ($this->activity instanceof playing) {
            $this->setActivity(new reading());
        } elseif ($this->activity instanceof reading) {
            $this->setActivity(new sleep());
        }
    }

    public function justDoit() {
        $this->activity->justDoit();
    }
}
