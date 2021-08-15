<?php

    require_once 'Cat.class.php';

    $cat = new Cat('Mimi', 'blue', 2, '3kg'); 
    $cat->showInfo();
    echo '<pre>';
    print_r($cat);
    echo '</pre>';