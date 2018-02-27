<?php

class Contato {
    private $email;
    private $telefone;
    
    function __set($name, $value) {
        $this->$name = $value;
    }

    function __get($name) {
        $this->$name;
    }
            
    function display() {
        echo "<pre>";
        echo "Email: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
        echo "</pre>";
    }
}
