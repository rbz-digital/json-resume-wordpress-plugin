<?php

namespace RbzDigital\RbzJsonResume;

class JsonResume {
    private $message;
    public function __construct() {
       $this->message = "Hello World!\n";
    }
    
    public function sayHello() {
       return $this->message;
    }
}
