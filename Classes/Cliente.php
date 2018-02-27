<?php
require_once 'Contato.php';

class Cliente {
    private $nome;
    private $contado;
    
    function __construct() {
        $this->contado = new Contato();
    }

    function getNome() {
        return $this->nome;
    }

    function getContado() {
        return $this->contado;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setContado($email, $telefone) {
        $this->contado->email = $email;
        $this->contado->telefone = $telefone;
    }
}
