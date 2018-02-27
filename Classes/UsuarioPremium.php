<?php
/**
 * Description of UsuarioPremium
 *
 * @author Manfred
 */
class UsuarioPremium extends Usuario {
    
    private $moeda;
    
    /*
    public function __construct($nome, $senha, $sexo, $login, $email) {
        parent::__construct($nome, $senha, $sexo, $login, $email);
        $this->moeda = 0;
        parent::setPremium(1);
    } */
    
    function getMoeda() {
        return $this->moeda;
    }

    function setMoeda($moeda) {
        $this->moeda = $moeda;
    }
    
    function mostrarDados() {
        parent::mostrarDados();
        
        if ($this->premium == 1) {
            echo 'Moeda: ' . $this->moeda;
            echo '</pre>';
        }
    }
    
    function adicionarMoedas($valor) {
        $this->moeda += $valor;
    }
    
    function atribuirNota($b, $i, $r, $d) {
        return ($b * 4 + $i * 3 + $r * 2 + $d) / 10;
    }
}
