<?php

abstract class Usuario {
    protected $id;
    protected $nome;
    protected $nota;
    protected $senha;
    protected $sexo;
    protected $login;
    protected $email;
    protected $premium;
   
    function __construct($nome, $senha, $sexo, $login, $email) {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->sexo = $sexo;
        $this->login = $login;
        $this->email = $email;
        $this->premium = 0;
    }
            
    function __destruct() {
        echo '<p>Usuário destruído</p>';
    }
            
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getNota() {
        return $this->nota;
    }

    function getSenha() {
        return $this->senha;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getLogin() {
        return $this->login;
    }

    function getPremium() {
        return $this->premium;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPremium($premium) {
        $this->premium = $premium;
    }

            
    function mostrarDados() {
        echo '<pre>';
        echo 'ID: ' . $this->id . '<br>';
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Nota: ' . $this->nota . '<br>';
        echo 'Senha: ' . $this->senha . '<br>';
        echo 'Sexo: ' . $this->sexo . '<br>';
        echo 'Login: ' . $this->login . '<br>';
        echo 'Email: '. $this->email . '<br>';
        
        if ($this->premium == 0) {
            echo 'Premium: Não<br>';
        }
        else {
            echo 'Premium: Sim<br>';
        }
        
        if ($this->premium == 0) {
            echo '</pre>';
        }
    }
    
    abstract public function atribuirNota($b, $i, $r, $d);
}
