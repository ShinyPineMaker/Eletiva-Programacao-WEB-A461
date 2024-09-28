<?php

namespace Exercicio1;

class Ponto{
    private int $x;
    private int $y;
    private static int $qtdObjetosCriados;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
        self::$qtdObjetosCriados ++;
    }

    public function getX(){
        return $this->x;
    }

    public function setX($value){
        $this->x = $value;
    }

    public function getY(){
        return $this->y;
    }

    public function setY($value){
        $this->y = $value;
    }

    public function Contagem(){
        return self::$qtdObjetosCriados;
    }

    public function CalcularDistanciaPonto(Ponto $alvo){
        return sqrt((($alvo->x - $this->x) ** 2) + (($alvo->y - $this->y) ** 2));
    }

    public function CalcularDistanciaCoord($alvoX, $alvoY){
        return sqrt((($alvoX - $this->x) ** 2) + (($alvoY - $this->y) ** 2));
    }

    public function CalcularDistancia($x1, $y1, $x2, $y2){
        return sqrt((($x2 - $x1) ** 2) + (($y2 - $y1) ** 2));
    }
}
