<?php

class livro{
    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->setano($ano);
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getano(){
        return $this->ano;
    }
    public function setano($ano){
        if ($ano > 1900){
            $this->ano = $ano;
        }
        else{
            $this->ano = 1900;
        }
    }

}

var_dump(new livro("A", "A", 2000));
?>