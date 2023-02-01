<?php
/* 
    Composite (компоновщик)- структурный шаблон проектирования, 
    обьединяющий обьекты в древовидную структуру для предоставления
    иерархии от чатного к целому. Компоновщик позволяет клиентам
    обращаться к отдельным обьектам и к группам обьектов одинаково.
*/


require_once('videocard.php'); // you should never write absolute paths, use a relative path with __DIR__ instead

$asus = new videocard(5);
$gigabyte = new videocard(3);
$palit = new videocard(8);

$box1 = new Box();

$box1->addItems($asus);
$box1->addItems($palit);
$box1->addItems($gigabyte);

echo "total" . $box1->getPrice();
