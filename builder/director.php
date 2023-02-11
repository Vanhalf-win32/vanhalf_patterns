<?php

require_once __DIR__ . '/main.php';
require_once __DIR__ . '/director.php';
require_once __DIR__ . '/pc_builder.php';

class Director
{
    public $pcBuilder;

    public function setPcBuilder($pcBuilder) {
        $this->pcBuilder = $pcBuilder;
    }

    public function getPc() {
        return $this->pcBuilder->getPc();
    }

    public function constructPc() {
        $this->pcBuilder->newPc();
        $this->pcBuilder->getMotherboard();
        $this->pcBuilder->getProcessor();
        $this->pcBuilder->getMemmory();
    }
}