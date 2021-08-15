<?php

    require_once 'Cat.class.php';

    $arrCatA = array(
        'name'      =>'Mimi',
        'color'     =>'black',
        'age'       =>3,
        'weight'    =>'1kg'
    );
    $catA = new Cat($arrCatA);


    $catA->showInfo();  
