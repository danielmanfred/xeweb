<?php
include '../inc/conector.php';

if (!(isset($_GET["id"]))) {
    die("Erro no processor de excluir a categoria");
}
else {
    $id = $_GET["id"];
}

$sql = "DELETE FROM categoria WHERE id = $id";

mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=7'>"
        . "<script>"
            . "alert('Categoria foi apagado com sucesso');"
        . "</script>";
}
else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=7'>"
        . "<script>"
            . "alert('Não foi possível apagar a categoria');"
        . "</script>";
}

include_once '../inc/desconectar.php';
