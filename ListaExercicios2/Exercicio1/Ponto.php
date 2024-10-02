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
    

    public function Contagem(){
        return self::$qtdObjetosCriados;
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

    public function deslocar($dx, $dy){
        return sqrt((($dx->getX() - $this->x) ** 2) + (($dy - $this->y) ** 2));
    }

    public function DistanciaEntrePontosObjeto(Ponto $ponto1, Ponto $ponto2){
        return sqrt((($ponto2->getX() - $ponto1->getX()) ** 2) + (($ponto2->getY() - $ponto1->getY()) ** 2));
    }
    
    public function DistanciaEntrePontosCoordenada(int $x1, int $y1, int $x2, int $y2){
        return sqrt( (($x2 - $x1) ** 2) + (($y2 - $y1) ** 2) ); 
    }
}
