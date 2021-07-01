<?php

require_once 'Cat.class.php';
class Lion extends Cat{
    public $maxSpeed = '50km/h';

    public function showInfo(){
        echo '<br />Name: '.parent::getName();
        echo '<br />Color: '.parent::getColor();
        echo '<br />Age: '.parent::getAge();
        echo '<br />Weight: '.parent::getWeight();
        echo '<br />Max speed - self: '. $this->maxSpeed;
        echo '<br />Lion';
    }
}