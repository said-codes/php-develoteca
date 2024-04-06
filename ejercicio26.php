<?php

class Person{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public static function sayHello(){
        echo "Hello, I am a static method";
    }
}

Person::sayHello();

?>
