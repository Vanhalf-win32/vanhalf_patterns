<?php

// The file name shoud match the class name

// use a namespace to prevent name conflicts, for better readability and autoloading
namespace Composite; // make sure you name the directory accordingly i.e. capitalize

// interfaces starts with capital letter
interface BlockInterface 
{
    public function getPrice();
}
