<?php
include '../inc/conector.php';

$nome = $_POST['inputNome'];
$categoria = $_POST[''];

$sql = "INSERT INTO item (nome, created) VALUES ('$nome', NOW())";
$query = mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=2'>"
        . "<script>"
            . "alert('Categoria cadastrada com sucesso');"
        . "</script>";
}
else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=2'>"
        . "<script>"
            . "alert('Não foi possível cadastrar a categoria');"
        . "</script>";
}

include_once '../inc/desconectar.php';
