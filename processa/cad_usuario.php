<?php
include '../inc/conector.php';

$nome = $_POST['inputNome'];
$senha   = $_POST['inputSenha'];
$login   = $_POST['inputLogin'];
$email   = $_POST['inputEmail'];
$sexo    = $_POST['inputSexo'];

$sql = "INSERT INTO usuario (nome, senha, login, email, sexo) VALUES ('$nome','$senha','$login','$email','$sexo')";
$query = mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=2'>"
        . "<script>"
            . "alert('Usuário cadastrado com sucesso');"
        . "</script>";
}
else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=2'>"
        . "<script>"
            . "alert('Não foi possível cadastrar o usuário');"
        . "</script>";
}

include_once '../inc/desconectar.php';
