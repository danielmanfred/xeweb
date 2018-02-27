<?php
include '../inc/conector.php';
$id      = $_POST['id'];
$nome    = $_POST['inputNome'];
$senha   = $_POST['inputSenha'];
$login   = $_POST['inputLogin'];
$email   = $_POST['inputEmail'];
$sexo    = $_POST['inputSexo'];

$sql = "UPDATE usuario SET nome = '$nome', login = '$login', email = '$email', sexo = '$sexo' "
        . "WHERE id = $id"; 

mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=2'>"
        . "<script>"
            . "alert('Usuário editado com sucesso');"
        . "</script>";
}
else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/hipno/index.php?link=2'>"
        . "<script>"
            . "alert('Não foi possível editar o usuário');"
        . "</script>";
}

include_once '../inc/desconectar.php';
