<?php
require 'FileClock.php';

class Singleton{
    public static $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        echo 'want create instance.'.PHP_EOL;
        if(self::$instance == null){
            echo 'created new instance.'.PHP_EOL;
            return self::$instance = new self();
        }
        echo 'used old instance.'.PHP_EOL;
        return self::$instance;
    }
}