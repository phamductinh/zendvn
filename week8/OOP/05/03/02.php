<?php

    require_once 'Lion.class.php';

    $lion = new Lion('Lion A', 'brown', 3, '20kg');
    $lion -> showInfo();

    echo '<pre>';
    print_r($lion);
    echo '</pre>';