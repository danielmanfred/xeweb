<?php
include 'inc/conector.php';

$u = new Usuario();

$u->setNome("Nhonho");
$u->setSenha('ioio');
$u->setSexo('M');
$u->setLogin('nhonho');
$u->setEmail('nhonho@mail.com');
$u->setPremium(false);

include 'inc/desconectar.php';