<?php

include '../../inc/conector.php';
            
function __autoload($classe) {
    include "../../Classes/{$classe}.php";
}

$sqlC = 'SELECT * FROM categoria WHERE id = 2';
$sqlI = 'SELECT * FROM item WHERE id = 3';

$resultadoC = mysqli_query($conexao, $sqlC);
$resultadoI = mysqli_query($conexao, $sqlI);

$categoria = new Categoria();
$item = new Item();

$filaC = mysqli_fetch_row($resultadoC);
$filaI = mysqli_fetch_row($resultadoI);

$categoria->setId($filaC[0]);
$categoria->setNome($filaC[1]);

$item->setId($filaI[0]);
$item->setNome($filaI[1]);
$item->setCategoria($filaI[2]);
$item->setDescricao($filaI[3]);

echo "<pre>Categoria:<br>Nome: " . $categoria->getNome() . "<br></pre>";
echo "<pre>Item:<br>Nome: " . $item->getNome() . "<br>Categoria: " . $item->getCategoria() . "<br><pre>";

$item->trabalhar("PHP", "JavaScript");

include '../../inc/desconectar.php'; 
