<?php

namespace App\state;

require_once __DIR__ . "/interface.php";

class playing implements act 
{
    public function justDoit() {
        echo "playing in game";
    }
}
