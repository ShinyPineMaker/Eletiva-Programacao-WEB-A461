<?php

namespace Exercicio1;
include "Ponto.php";


class Main{
    function DistanciaEntrePontosObjeto(Ponto $ponto1, Ponto $ponto2){
        return sqrt((($ponto2->getX() - $ponto1->getX()) ** 2) + (($ponto2->getY() - $ponto1->getY()) ** 2));
    }

    function DistanciaEntrePontosCoordenada(int $x1, int $y1, int $x2, int $y2){
        return sqrt( (($x2 - $x1) ** 2) + (($y2 - $y1) ** 2) ); 
    }
}