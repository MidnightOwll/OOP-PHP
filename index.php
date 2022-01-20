<?php
//Инкапсуляция 
class Person {
    private $lastName;
    private $name;
    private $age;
    public function __construct($lastName, $name, $age){
        $this->lastName = $lastName;
        $this->name = $name;
        $this->age = $age;
    }
    public function hello(){
        echo 'Меня зовут '.$this->lastName.' '.$this->name.' мне '.$this->age.' лет';
    }
    public function getLastName ()
    {
       return $this->lastName;
    }
    public function setlastName ( $lastName )
    {
        $this->lastName = $lastName;
    }
    public function getName ()
    {
       return $this->name;
    }
    public function setName ( $name )
    {
        $this->name = $name;
    }
    public function getAge ()
    {
       return $this->age;
    }
    public function setAge ( $age )
    {
        $this->age = $age;
    }
}

$person1 = new Person('Демиденко', 'Виталий', '21');
$person2 = new Person('Петров', 'Петр', '22');
echo $person1->hello();
echo "<br>";
echo $person2->hello();
echo "<br>";
echo "<br>";
//Наследование
class Worker extends Person {
    private $inn;

    public function __construct($lastName, $name, $age, $inn){
        parent::__construct($lastName, $name, $age);
        $this->inn = $inn;
    }   
    function hello(){
        parent::hello();
        echo ' и я работник';
    }
}
$worker1 = new Worker('Демиденко', 'Виталий', '22','1111111111');
$worker2 = new Worker('Петров', 'Петр', '24', '2222222222');
echo $worker1->hello();
echo "<br>";
echo $worker2->hello();
echo "<br>";
echo "<br>";

class Proger extends Worker {
    private $prLang;

    public function __construct($lastName, $name, $age, $inn, $prLang){
        parent::__construct($lastName, $name, $age, $inn);
        $this->prLang = $prLang;
    }   
    function hello(){
        parent::hello();
        echo ', а именно программист';
    }
}

$proger1 = new Proger('Демиденко', 'Станистлав', '18', '4444444444', 'Java');
echo $proger1->hello();
// полиморфизм
$persons = [$person1, $worker1, $proger1];
function sayHelloAll($person) {
     for ($i = 0; $i < count($person); $i++) { 
         $person[$i]->hello();
         echo "<br>";
     }
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
sayHelloAll($persons);