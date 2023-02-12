<?php
// State (состояние) - это поведенческий паттерн который позволяет,
// обьектам менять свое поведение в зависимости от состояния.


namespace App\state;

require_once __DIR__ . "/sleep.php";
require_once __DIR__ . "/main.php";
require_once __DIR__ . "/coding.php";
require_once __DIR__ . "/playing.php";
require_once __DIR__ . "/reading.php";

$active = new coding();
$man = new developer();
$man->setActivity($active);

for ($i = 0; $i < 10; $i++) {
   $man->justDoit();
   $man->changeActivity();
}
