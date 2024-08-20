<?php

interface Forma{
    public function area();
    public function perimetro();
}

class Retangulo implements Forma{
    private $altura;
    private $comprimento;
    
    public function __construct($altura, $comprimento){
        $this->altura = $altura;
        $this->comprimento = $comprimento;
    }

    public function area(){
        return $this->altura * $this->comprimento;
    }

    public function perimetro(){
        return $this->altura * 2 + $this->comprimento * 2;
    }
}