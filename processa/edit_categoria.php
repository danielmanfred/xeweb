<?php
include '../inc/conector.php';
$id      = $_POST['id'];
$nome    = $_POST['inputNome'];

$sql = "UPDATE categoria SET nome = '$nome' WHERE id = $id"; 

mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=7'>"
        . "<script>"
            . "alert('Categoria editada com sucesso');"
        . "</script>";
}
else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=7'>"
        . "<script>"
            . "alert('Não foi possível editar a categoria');"
        . "</script>";
}

include_once '../inc/desconectar.php';
