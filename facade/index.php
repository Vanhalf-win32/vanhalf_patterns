<?php

//  Facade (фасад) - структурный шаблон проектирования,
//  позволяющий скрыть сложность системы путем сведения всех возможных
//  внешних вызовов к одному обьекту, делегирующему их обьектам системы.


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/shape_maker.php';
require_once __DIR__ . '/shape.php';
require_once __DIR__ . '/circle.php';
require_once __DIR__ . '/triangle.php';
require_once __DIR__ . '/square.php';


$shapeCircle = new shapeMaker();
$shapeTriangle = new shapeMaker();
$shapeSquare = new shapeMaker();


$shapeCircle->getCircle();
echo "\n";
$shapeTriangle->getTriangle();
echo "\n";
$shapeSquare->getSquare();
echo "\n";
