<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Daniel Brito">
    <link rel="icon" href="img/logoxe.png">

    <title>Login Xé</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <?php
        unset(
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioSexo'],
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha'],
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNota'],
        $_SESSION['usuarioEmail']
        );
        $_SESSION['usuarioNome'] = '';
    ?>
      
    <div class="container">

        <form class="form-signin" method="POST" action="valida_login.php">
        <h2 class="form-signin-heading text-center">Entre no Xé</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Usuário" required autofocus><br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>
        
        <p class="text-center text-danger">
            <?php
                if (isset($_SESSION['loginErro'])) {
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }
            ?>
        </p>

    </div> <!-- /container -->
  </body>
</html>

