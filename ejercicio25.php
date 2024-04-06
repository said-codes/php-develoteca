<?php

class Person{
    protected $name;
    protected $lastname;
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

class Worker extends Person{
    protected $job;

    public function __construct($name, $lastname, $job){
        parent::__construct($name, $lastname);
        $this->job = $job;
    }

    public function getFullName(){
        return $this->name . ' ' . $this->lastname . ' ' . 'Worker';
    }

    public function getJob(){
        return $this->job;
    }


}


//instance or creation of object
$student = new Person('John', 'Doe');
echo $student->getFullName();
echo '<br>';
$student2 = new Person('Jane', 'Doe');
echo $student2->getFullName();
echo '<br>';

$worker = new Worker('John', 'Doe', 'Developer');
echo $worker->getFullName();
echo '<br>';
echo $worker->getJob();
echo '<br>';
?>
