<?php

require_once('interface.php');


class videocard implements blockInterface 
{
    public $price;

    public function __construct($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Box implements blockInterface
{
    public $block = [];
    public $price;

    public function getPrice() {
        return $this->price;
    }

    public function addItems($items) {
        $this->price += $items->getPrice();
        array_push($this->block, $items);
    }
}