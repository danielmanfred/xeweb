<?php

include_once '../Classes/Categoria.php';
include_once '../Classes/Item.php';
include_once '../Classes/Oferta.php';
include_once '../Classes/Cliente.php';

$categoria1 = new Categoria(1, "Engenharia");
$categoria2 = new Categoria(2, "Medicina");
$item1 = new Item(1, "Calculadora", $categoria1, "Fazer calculos muito maneiro");
$item2 = new Item(2, "Pinça", $categoria2, "Pegar os tecidos");
$oferta = new Oferta();
$cliente = new Cliente();

$cliente->setNome("Sérgio");
$cliente->setContado("sergio@mail.com", "9061201");

echo $cliente->getNome();
$cliente->getContado()->display();