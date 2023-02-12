<?php
namespace builder;

require_once __DIR__ . '/main.php';
require_once __DIR__ . '/director.php';
require_once __DIR__ . '/pc_builder.php';

abstract class pcBuilder 
{
    public $pc;

    public function setPc() {
        return $pc;
    }

    public function newPc() {
        $this->pc = new Pc();
    }

    abstract function getMotherboard();

    abstract function getProcessor();
    
    abstract function getMemmory();
}

class cheapBuilder extends pcBuilder 
{
    public function getMotherboard()
    {
        $this->pc->setMotherboard('ASUS');
    }

    public function getProcessor()
    {
        $this->pc->setProcessor('INTEL');
    }
    
    public function getMemmory()
    {
        $this->pc->setMemmory('KINGSTONE');  
    }
}
