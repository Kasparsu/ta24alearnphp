<?php

class Box {
    use HasSmell;
    public bool $isOpen = false;
    private bool $hasBeenOpened = false;

    public function __construct(private int $width, private $height, private $length) {
      
    }

    public function setWidth(int $width) {
        if($width<0){
            $this->width = 0;
        }
        $this->width = $width;
    }
    public function getWidth() {
        return $this->width;
    }

    public function open() {
        $this->isOpen = true;
    }
    
    public function volume(){
        return $this->width * $this->height * $this->length;
    }
    public function test1() {
        var_dump($this->hasBeenOpened);
    }
}

class MetalBox extends Box {
    use HasColor, HasSmell;
    public $weightPerUnit;
    
    public function mass(){
        return $this->weightPerUnit * $this->volume();
    }

    public function test2() {
        var_dump($this->hasBeenOpened);
    }
}

trait HasColor {
    public $color;
    public function showColor(){
        return $this->color;
    }
}

trait HasSmell {
    public $smell;
    public function sniff(){
        return $this->smell;
    }
}


$metal1 = new MetalBox(1,2,3);
$metal1->weightPerUnit = 1;
var_dump($metal1->mass(), $metal1);
$metal1->isOpen = 'asdasd';
var_dump($metal1->isOpen);
$metal1->test1();
$metal1->test2();
var_dump($metal1->hasBeenOpened);
