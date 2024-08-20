<?php

abstract class Animal{
    protected $nome;
    protected $raca;
    public function getNome(){
        return $this->nome;
    }
    public function getRaca(){
        return $this->raca;
    }
    public function setRaca($raca){
        $this->raca = $raca;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    abstract public function fazerBarulho();
}


class cachorro extends Animal{
    private $pelagem;

    public function getPelagem(){
        return $this->pelagem;
    }

    public function setPelagem($pelagem){   
        $this->pelagem = $pelagem;
    }

    public function fazerBarulho(){
        return "latindo";
    }
}