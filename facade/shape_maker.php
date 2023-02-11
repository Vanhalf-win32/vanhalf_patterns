<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/shape_maker.php';
require_once __DIR__ . '/shape.php';
require_once __DIR__ . '/circle.php';
require_once __DIR__ . '/triangle.php';
require_once __DIR__ . '/square.php';



class shapeMaker {
    public $circle;
    public $triangle;
    public $square;

    public function __construct() {
        $this->circle = new Circle();
        $this->triangle = new Triangle();
        $this->square = new Square();
    }

    public function getCircle() {
         $this->circle->draw();
    }

    public function getTriangle() {
        $this->triangle->draw();
    }

    public function getSquare() {
        $this->square->draw();
    }
}