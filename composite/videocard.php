<?php

// You should use a separate file for each class

require_once('interface.php'); // please use namespace and autoload instead of direct require

// class name should start with a capital letter
class Videocard implements blockInterface 
{
    private $price; // no need for this field to be public

    public function __construct($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Box implements blockInterface
{
    // same thing here - you must prevent users from directly accessing your class properties
    private $block = [];
    private $price;

    public function getPrice() {
        return $this->price;
    }

    public function addItems($items) {
        $this->price += $items->getPrice();
        array_push($this->block, $items);
    }
}
