<?php
namespace builder;

require_once __DIR__ . '/main.php';
require_once __DIR__ . '/director.php';
require_once __DIR__ . '/pc_builder.php';

class Pc {

    public $motherboard;
    public $processor;
    public $memmory;

    public function setMotherboard($motherboard) 
    {
        $this->motherboard = $motherboard;
    }

    public function setProcessor($processor) 
    {
        $this->processor = $processor;
    }

    public function setMemmory($memmory) 
    {
        $this->memmory = $memmory;
    }

}