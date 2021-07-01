<?php

require_once 'Cat.class.php';

$catA = new Cat();
$catA->setName('Mimi');
$catA->setColor('black');
$catA->setAge('3');
$catA->showInfo();

$catB = new Cat();
$catB->setName('Kitty');
$catB->setColor('pink');
$catB->setAge('1');
$catB->showInfo();