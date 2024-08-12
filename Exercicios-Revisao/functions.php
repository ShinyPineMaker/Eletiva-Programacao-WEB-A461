<?php

function Diferenca($hora_entrada, $hora_saida){
    return $hora_saida - $hora_entrada; 
}

function SalarioMensal($quantidade_horas, $valor_hora){
    return ($quantidade_horas * $valor_hora) / 4.5;
}

function DistribuirBonusAnual($lucro, $fatorlucro){
    switch ($fatorlucro){
        case 1:
            $fatorlucro=0.1;
            break;
        case 2:
            $fatorlucro=0.25;
            break;
        case 3:
            $fatorlucro=0.4;
            break;
        case 4:
            $fatorlucro=0.55;
            break;
        case 5:
            $fatorlucro=0.7;
            break;            
    }

    return $lucro * $fatorlucro;
}