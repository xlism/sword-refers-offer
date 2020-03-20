<?php

class Singleton{
    public $instance = null;

    private function __construct() {}

    public function getInstance()
    {
        if($this->instance == null){
            return new self();
        }
    }
}