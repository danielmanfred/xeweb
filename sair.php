<?php

session_start();
session_destroy();

// Remover as informações contidas nas variáveis globais
unset(
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioSexo'],
    $_SESSION['usuarioLogin'],
    $_SESSION['usuarioSenha'],
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNota'],
    $_SESSION['usuarioEmail']
    );

// Redirecionar o usuário para a página de login
header('Location: login.php');