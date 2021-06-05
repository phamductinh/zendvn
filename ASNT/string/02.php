<?php 
    $str = "   pham      DUc     Ti nh " ;
    function formatString($str, $type = null){
        $str = strtolower($str);
        
        $str = trim($str);
        
        $array = explode(" ", $str);
        foreach ($array as $key => $value){
            if(trim($value) == null){
                unset($array[$key]);
                continue;
            }
            if($type=="danh-tu"){
                $array[$key] = ucfirst($value);
            }
        }
        $result = implode(" ", $array);
        
        $result = ucfirst($result);
        
        return $result;
    }
    
    $result = formatString($str, "danh-tu");
    echo $result . "<br />";
    echo strlen($result) . "<br />";