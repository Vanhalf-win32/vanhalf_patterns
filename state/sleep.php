<?php

namespace App\state;

require_once __DIR__ . "/interface.php";

class sleep implements act
{
    public function justDoit() {
        echo "candy sleeping";
    }
}
