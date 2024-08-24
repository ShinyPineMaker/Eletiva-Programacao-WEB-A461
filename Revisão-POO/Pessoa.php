<?php

declare(stric_types=1);

class Pessoa{

    private string $nome;
    private string $email;
    private int $idade;
    private float $salario;

    public function __construct(string $nome, string $email, int $idade, float $salario) {
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
        $this->salario = $salario;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function setNome(string $value) : void {
        $this->nome = $value;
    }
}