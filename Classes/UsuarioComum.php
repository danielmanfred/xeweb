<?php

/**
 * Description of UsuarioComum
 *
 * @author Manfred
 */
class UsuarioComum extends Usuario {
    
    function atribuirNota($b, $i, $r, $d) {
        return ($b + $i + $r + $d) / 4;
    }
}
