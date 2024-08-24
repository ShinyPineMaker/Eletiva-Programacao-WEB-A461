<?php

class Contador{
    public static int $value = 0;

    public static function Incremento(){
        self::$value += 1;
    }

    public static function Decremento(){
        self::$value --;
    }
}

Contador::Incremento();
Contador::Decremento();
Contador::Incremento();
echo Contador::$value;