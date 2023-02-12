<?php
namespace builder;

require_once __DIR__ . '/main.php';
require_once __DIR__ . '/director.php';
require_once __DIR__ . '/pc_builder.php';

$myNewPc = new Director();
$pcBuilder = new cheapBuilder();
$myNewPc->setPcBuilder($pcBuilder);
$myNewPc->constructPc();

print_r($myNewPc);
