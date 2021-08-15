<?php

    require_once 'Cat.class.php';

    $catA = new Cat('Mimi', 'yellow', 3, '2kg');
    

    $catB = clone $catA;
    $catB->setName('Kitty');
    $catB->setColor('blue');
    $catB->setAge(5);

    $catA -> showInfo();
    echo '<hr /><br />';
    $catB->showInfo();