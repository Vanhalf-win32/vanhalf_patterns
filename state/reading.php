<?php

namespace App\state;

require_once __DIR__ . "/interface.php";

class reading implements act
{
    public function justDoit() {
        echo "reading book";
    }
}
