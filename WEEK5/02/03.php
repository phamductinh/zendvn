<?php

class Cat{
    //properties
    public $name;
    public $color;
    public $age;

    //methods
    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

    public function getAge(){
        return $this->age;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function setColor($value){
        $this->color = $value;
    }

    public function setAge($value){
        $this->age = $value;
    }
}

$catA = new Cat();
$catA->setName('Mimi');
$catA->setColor('black');
$catA->setAge('3');

echo '<br />Name: '. $catA->getName();
echo '<br />Color: '. $catA->getColor();
echo '<br />Age: '. $catA->getAge();

$catB = new Cat();
$catB->setName('Kitty');
$catB->setColor('pink');
$catB->setAge('1');

echo '<br />Name: '. $catB->getName();
echo '<br />Color: '. $catB->getColor();
echo '<br />Age: '. $catB->getAge();
