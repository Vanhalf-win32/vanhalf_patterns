<?php

require_once('videocard.php');

$asus = new videocard(5);
$gigabyte = new videocard(3);
$palit = new videocard(8);

$box1 = new Box();

$box1->addItems($asus);
$box1->addItems($palit);
$box1->addItems($gigabyte);

echo "total" . $box1->getPrice();
