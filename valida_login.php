<?php
    session_start();
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    include_once 'inc/conector.php';
    
    $sql = "SELECT * FROM usuario WHERE nome = '$usuario' AND senha = '$senha' LIMIT 1";
    $result = mysqli_query($conexao, $sql);
    
    $resultado = mysqli_fetch_assoc($result);
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = 'Usuário ou senha inválido';
        header('Location: login.php');
    } 
    else {
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioSexo'] = $resultado['sexo'];
        $_SESSION['usuarioLogin'] = $resultado['login'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNota'] = $resultado['nota'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        
        header('Location: index.php');
    } 
    
    include_once 'inc/desconectar.php';
    
    echo '<br><a href="login.php">Voltar</a>';

