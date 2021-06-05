<?php
    
    /*
     * 01 - lay phan so
     * 02 - UCLN cua tu so va mau so
     * 03 - chia tu so va mau so cho UCLN
     * 04 - phan so moi
     */

    $fractions = "4/3";
    
    // 01 - lay phan so
    
    $arrFraction = explode("/", $fractions);
    $ts = $arrFraction[0];
    $ms = $arrFraction[1];
    
    // 02 - UCLN
    // a % d ==0 -> d uoc cua a, a boi cua d
    // d UCLN cua a va b, d la gia tri uoc lon nhat cua a va b
    // 18 - 4 -> 2
    
    function UCLN($n1, $n2){
        for($i = 1; $i <= $n1; $i++) if($n1 % $i == 0) $uclnN1[] = $i;
        for($i = 1; $i <= $n2; $i++) if($n2 % $i == 0) $uclnN2[] = $i;
            
        $temp = array_intersect($uclnN1, $uclnN2);
        
        echo "<pre>";
        print_r($uclnN1);
        echo "</pre>";
        
        echo "<pre>";
        print_r($uclnN2);
        echo "</pre>";
        
        echo "<pre>";
        print_r($temp);
        echo "</pre>";
    }
    
    UCLN(18,4);