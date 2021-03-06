<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name=description content="Serviço de economia compartilhada">
        <meta name=viewport content="width=device-width, inicial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1">
        <meta name="keywords" content="economia compartilhada, economia colaborativa"
        <title>Ofertas demandas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">        
        <link rel="stylesheet" href="../css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logoxe.png">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="../index.php">Xé</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="listar.php">Categorias</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../item/listar.php">Itens</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../negocio/listar.php">Negócios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Demandar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ofertar</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
        
      <div class="starter-template">
          
        <h1>Xé - Ofertas Demandadas</h1>
        
        <table class="table table-hover">
            <thead>
            <th>Ofertante</th>
            <th>Valor</th>
            <td>Item</td>
            </thead>
            <tbody>
            <?php
                include '../inc/conector.php';

                $sql = 'SELECT o.valor AS valor, u.nome AS ofertante, i.nome AS item
                        FROM oferta o
                        JOIN usuario u ON o.ofertante = u.id
                        JOIN demanda d ON o.demanda = d.id
                        JOIN item i ON d.item = i.id';
                $resultado = mysqli_query($conexao, $sql);
            
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    echo '<td>' . $linha['ofertante'] . '</td>';
                    echo '<td>' . $linha['valor'] . '</td>';
                    echo '<td>' . $linha['item'] . '</td>';
                    echo '</tr>';
                }

                include '../inc/desconectar.php';
            ?>
            </tbody>
        </table>
      </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>');</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
