<?php

namespace App\state;

require_once __DIR__ . "/interface.php";

class coding implements act
{
    public function justDoit() {
        echo "write code";
    }
}
