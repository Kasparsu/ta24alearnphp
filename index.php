<?php

class Box {
    
    public $isOpen = false;
    public $hasBeenOpened = false;

    public function __construct(public $width, public $height, public $length) {
      
    }

    public function open() {
        $this->isOpen = true;
    }
    
    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $weightPerUnit;
    
    public function mass(){
        return $this->weightPerUnit * $this->volume();
    }
}

$metal1 = new MetalBox(1,2,3);
$metal1->weightPerUnit = 1;
var_dump($metal1->mass(), $metal1);