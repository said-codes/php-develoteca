<?php

class Person{
    private $name;
    private $lastname;
    protected $age;

    public function __construct($name, $lastname){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = 0;
    }

    public function getFullName(){
        return $this->name . ' ' . $this->lastname;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function setLastName($lastname){
        $this->lastname = $lastname;
    }

    public function getName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->lastname;
    }

}
//instance or creation of object
$student = new Person('John', 'Doe');
echo $student->getFullName();
echo '<br>';
$student2 = new Person('Jane', 'Doe');
echo $student2->getFullName();
echo '<br>';

?>
