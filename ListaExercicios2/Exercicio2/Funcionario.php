<?php

class Funcionario {
    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($codigo, $nome, $salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;

        if ($this->salarioBase > 2000) {
            $ir = (salarioBase - 2000.0) * 0.12;
        }

        return ($this->salarioBase - $inss - $ir);
    }

    public function toString() {
        return "funcionario Código:". $this->codigo . "Nome: " . $this->nome . "Salário Base: " . $this->salarioBase . "Salário Líquido: " . $this->getSalarioLiquido();
        return (getClass().getSimpleName() + "\n Codigo: " + getCodigo() + "\n Nome: " + getNome() + "\n Salario Base: " + getSalarioBase() + "\n Salario Liquido: " + getSalarioLiquido());
    }
}


class Servente extends Funcionario {

    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($codigo,$nome,$salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $adicional = $this->salariobase + ($this->salariobase * 0.05);
        $inss = $this->salarioBase * 0.1;

        if ($this->salarioBase > 2000) {
            $ir = (salarioBase - 2000.0) * 0.12;
        }

        return ($this->salarioBase - $inss - $ir + $adicional) ;
    }
}

class Motorista extends Funcionario {
    private $nome;
    private $codigo;
    private $salarioBase;
    private $numero_carteira;

    public function __construct($codigo,$nome,$salarioBase,$numero_carteira) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->numero_carteira = $numero_carteira;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    }
    
    public function getNumeroCarteira(){
        return $this->numero_carteira;
    }

    public function setNumeroCarteira($numero_carteira){
        $this->numero_carteira = $numero_carteira;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;
        $grupos = $this->funcionarios / 10;
        for($i=0; $i < $grupos; $i++){
            $adicional += $this->salarioBase + ($this->salarioBase * 0.10);
        }

        if ($this->salarioBase > 2000) {
            $ir = (salarioBase - 2000.0) * 0.12;
        }
        return ($this->salarioBase - $inss - $ir + $adicional);
    }
}

class MestreDeObras extends Funcionario{
    private $nome;
    private $codigo;
    private $salarioBase;
    private $funcionarios;

    public function __construct($codigo,$nome,$salarioBase, $funcionarios) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->funcionarios = $funcionarios;
    }

    public function getFuncionarios(){
        return $this->funcionarios;
    }

    public function setFuncionarios($funcionarios){
        $this->funcionarios = $funcionarios;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;

        if ($this->salarioBase > 2000) {
            $ir = (salarioBase - 2000.0) * 0.12;
        }

        return ($this->salarioBase - $inss - $ir);
    }
}