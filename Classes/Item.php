<?php

class Item {
    private $id;
    private $nome;
    private $categoria;
    private $descricao;
    
    function __construct() {
        
    }
            
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    function __call($name, $arguments) {
        echo "Método: " . $name . "<br>";
        echo "Parâmetros: " . print_r($arguments,1);
    }
}
