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

$person1 = new Person('Демиденко', 'Виталий', '22');
$person2 = new Person('Петров', 'Петр', '24');
echo $person1->hello();
echo "<br>";
echo $person2->hello();
echo "<br>";
echo "<br>";
//Наследование
class Proger extends Person {
    private $prLang;

    public function __construct($lastName, $name, $age, $prLang){
        parent::__construct($lastName, $name, $age);
        $this->prLang = $prLang;
    }   
}
$proger1 = new Proger('Демиденко', 'Станистлав', '18', 'PHP');
echo $proger1->hello();