<?php 

ini_set("default_charset", "UTF-8");
$conexao = mysqli_connect('localhost', 'root', 'xe', 'xen');
$conexao->query('SET NAMES utf8');

if (!$conexao) {
    die ('Falha ao conectar-se no sistema');
}
?>

