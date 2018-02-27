<!DOCTYPE html>
<?php 
    session_start();
    include_once 'usuario/seguranca.php';
    include_once 'inc/conector.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name=description content="Serviço de economia compartilhada">
        <meta name=viewport content="width=device-width, inicial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1">
        <meta name="keywords" content="economia compartilhada, economia colaborativa">
        <title>Xé</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">        
        
        <!-- Custom styles for this template -->
        <link href="css/starter-template.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        <link rel="shortcut icon" type="image/x-icon" href="img/logoxe.png">
    </head>
    <body>
        <?php
            include_once("menu.php"); 
            $link = null;
            
            if (isset($_GET['link'])) {
                $link = $_GET['link'];
                if (empty($link)) {
                    trigger_error("O link não foi encontrado", E_USER_NOTICE);
                }
            }
            
            $pagina[1] = "bem_vindo.php";
            $pagina[2] = "usuario/listar.php";
            $pagina[3] = "usuario/cadastro.php";
            $pagina[4] = "usuario/editar.php";
            $pagina[5] = "usuario/visualizar.php";
            $pagina[6] = "categoria/cadastrar.php";
            $pagina[7] = "categoria/listar.php";
            $pagina[8] = "categoria/vasualizar.php";
            $pagina[9] = "categoria/editar.php";
            $pagina[10] = "item/cadastrar.php";
            $pagina[11] = "item/listar.php";
            $pagina[12] = "item/vasualizar.php";
            $pagina[13] = "item/editar.php";
            
            
            if (!empty($link) && file_exists($pagina[$link])) {
                include $pagina[$link];
            }
            else {
                include 'bem_vindo.php';
            }
            
            include_once 'inc/desconectar.php';
            include_once 'Classes/Versoes.php';
            
            echo '<footer>';
            echo Versoes::$rodape;
            echo '</footer>';
        ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/escritos.js"></script>
    </body>
</html>
