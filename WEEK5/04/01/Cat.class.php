<?php

class Cat{
    //properties
    public $name;
    public $color;
    public $age;
    public $weight;

    //methods

    //__construct()
    /*
    public function __construct(){
        echo __METHOD__;
        $this->name = 'Mimi';
        $this->color = 'black';
        $this->age = 3;
    }
    */

    /*
    public function __construct($name = 'Doremon', $color = 'blue', $age = 2){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }
    */

    public function __construct($arrInfo){
        $this->name     = $arrInfo['name'];
        $this->color    = $arrInfo['color'];
        $this->age      = $arrInfo['age'];
        $this->weight   = $arrInfo['weight'];
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

    public function getAge(){
        return $this->age;
    }

    public function getWeight(){
        return $this->weight;
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

    public function showInfo(){
        echo '<br />Name: '.$this->getName();
        echo '<br />Color: '.$this->getColor();
        echo '<br />Age: '.$this->getAge();
        echo '<br />Weight: '.$this->getWeight();
    }
}
