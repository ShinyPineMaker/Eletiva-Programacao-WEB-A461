<?php

include "Usuario.php";
include "dados/Usuario.php";

use POO\Usuario as UsuarioRaiz;
use POO\dados\Usuario as UsuarioDois;

$obj = new UsuarioRaiz();
$obj2 = new UsuarioDois();

$obj->exibirNome();

$obj2->exibirEmail();