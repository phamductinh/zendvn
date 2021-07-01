<?php

require_once 'Lion.class.php';

$arrInfo = array('name'=>'Lion A', 'color'=> 'blue', 'weight'=>'30kg', 'age'=>3);
$lionA = new Lion($arrInfo);

echo '<pre>';
print_r($lionA);
echo '</pre>';

echo $lionA->showInfo();