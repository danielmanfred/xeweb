<?php

include '../Classes/Usuario.php';
include '../Classes/UsuarioComum.php';
include '../Classes/UsuarioPremium.php';

$let = new UsuarioComum();
$adi = new UsuarioPremium();

$notaL = $let->atribuirNota(8, 7, 4, 8);
$notaA = $adi->atribuirNota(6, 7, 6, 7);

echo 'Nota L: ' . $notaL . '<br>';
echo 'Nota A: ' . $notaA . '<br>';