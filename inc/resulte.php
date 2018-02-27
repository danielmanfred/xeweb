<?php
    include_once('inc/conector.php');
    
    $sql = "SELECT * FROM usuario WHERE nome = '$usuario' AND senha = '$senha' LIMIT 1";
    $result = mysqli_query($conexao, $sql);
    
    $resultado = mysqli_fetch_assoc($result);

