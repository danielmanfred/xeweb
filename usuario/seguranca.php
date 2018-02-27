<?php

ob_start();

if ($_SESSION['usuarioLogin'] == '' || $_SESSION['usuarioSenha'] == '') {
    
    unset(
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioSexo'],
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha'],
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNota'],
        $_SESSION['usuarioEmail']
         );
    
    $_SESSION['loginErro'] = 'Área restrita a usuários cadastrados';
    header('Location: ../login.php');
}


