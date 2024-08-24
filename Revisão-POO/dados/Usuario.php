<?php

namespace POO\dados;

class Usuario{

    private $email = "a@a.com";

    public function exibirEmail(){
        echo $this->email;
    }
}