<?php

abstract class Laptop{
    public function keyboard(){
        return 'co it nhat 40 phim';
    }

    public function ram(){

    }

    public function chip(){

    }

}

class Acer extends Laptop{
    public function keyboard(){
        return 'co it nhat 50 phim';
    }
}

$acer = new Acer();
echo $acer ->keyboard();