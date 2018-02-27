<?php
include 'Versoes.php';

class Aplicativo {
    public $nome;
    
    const LICENCA = "Trial";
    
    function __construct($nome) {
        $this->nome = $nome;
    }
    
    function mostrarDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Tido de Licença: " . self::LICENCA . "<br>";
        echo "Versão: " . VERSAO . "<br>";
        echo "Autor: " . AUTOR . "<br>";
        echo "Data: " . VERSAO . "<br>";
        echo "Sistema Operacional: ". SO . "<br>";
    }
}
