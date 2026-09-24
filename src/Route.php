<?php
namespace App;

class Route {

    public function __construct(private string $path, private $action)
    {
        
    }

    public function getPath() {
        return $this->path;
    }

    public function getAction() {
        return $this->action;
    }
}