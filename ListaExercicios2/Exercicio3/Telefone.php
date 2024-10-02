<?php

abstract class Telefone{
    protected $ddd;
    protected $numero;

    abstract function calculaCusto($tempo_ligacao);
}


class Fixo extends Telefone {
    private $custo_por_minuto;
    public function calculaCusto($tempo_ligacao){
        return $tempo_ligacao * $this->$custo_por_minuto;
    }
}

class Celular extends Telefone {
    private $custo_por_minuto;
    private $operadora;
    public function calculaCusto($tempo_ligacao){
        return $tempo_ligacao * $this->$custo_por_minuto;
    }
}

class PrePago extends Celular {
    public function calculaCusto($tempo_ligacao){
        $custo =  $this->$custo_por_minuto + ($custo_por_minuto * 0.40);
        return $custo * $tempo_ligacao;
    }
}

class PosPago extends Celular {
    public function calculaCusto($tempo_ligacao){
        $custo = $this->$custo_por_minuto - ($custo_por_minuto + 0.10);
        return $custo * $tempo_ligacao;
    }
}