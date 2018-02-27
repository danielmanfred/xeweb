<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Administração do Xé">
    <meta name="author" content="Manfred">

    <title>Perfil do Usuário</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron.css" rel="stylesheet">
    
    <!-- CSS próprio -->
    <link href="../css/style.css" rel="stylesheet">
    
    <!-- Logo -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/logoxe.png">
        
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../index.php">Xé</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Item1<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Item2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
      </div>
    </nav>

    <main role="main">

     <?php
        session_start();
        include_once("seguranca.php");
        $nome = $_SESSION['usuarioNome'];
     ?>
        
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">
              <?php
                    echo 'Bem vindo ' . $nome;
              ?>
          </h1>
            <p><script>
                var data = new Date();
                var dias = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
                var mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                document.write(dias[data.getDay()] + ", ");
                document.write(data.getDate(), "-");
                document.write(mes[data.getMonth()] + "-");
                document.write(data.getFullYear() + ", ");
                document.write(data.getHours() + ":");
                document.write(data.getMinutes() + "<br>");
                
                var mensagens = [
                    "Tá bom, mas nao se irrite", 
                    "A vingança nunca é plena, mata a alma e envenena",
                    "É que me escapuliu",
                    "As pessoas boas devem amar seus inimigos"
                ];
                
                var aleat = Math.floor(Math.random() * 4);
                document.write('"' + mensagens[aleat] + '"');
            </script></p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
      
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>FAÇA SEU IMC</h2>
            <p>Calcule aqui o seu índice de massa corporal. </p>
            
            <form id="formulario">
                <fieldset>
                    <legend>Cálculo do IMC</legend>
                    
                    <label for="quilos">Quilos_____:</label>
                    <input name="quilos"><br>
                    
                    <label for="metros">Altura_____:</label>
                    <input name="metros"><br>
                    
                    <label for="imc">IMC________:</label>
                    <input name="imc" disabled="disabled"><br>
                    
                    <label for="classificacao">Classificação:</label>
                    <input name="classificacao" disabled="disabled"><br>
                    
                    <p><a class="btn btn-secondary" href="#" role="button" onclick="calcularIMC();">Calcular &raquo;</a></p>
                </fieldset>
            </form>

          </div>
            <div class="col-md-4">
              <table>
                  <tr><th>IMC</th><th>Classificação</th></tr>
                  <tr><td>&lt; 20</td><td>Magro</td></tr>
                  <tr><td>20 a 25</td><td>Normal</td></tr>
                  <tr><td>&gt; 25</td><td>Gordo</td></tr>
              </table>
            </div>
            
          <div class="col-md-4">
            <h2>Heading</h2>            
            <script>
                var Crianca = 
                {
                    nome : "Chaves",
                    idade : 8,
                    ativo : new Boolean(NaN),
                    endereco : {
                        rua : "Rua do Chapolin Colorado",
                        bairro : "Astecas"
                    }
                };
                
                for (var c in Crianca) {
                    if (Crianca[c] instanceof Boolean) {
                        document.write(c + ' : ' + Crianca[c] + ' : ' + typeof(Crianca[c]) + ' : Intância buleana : ' + typeof(Crianca[c].valueOf()) + '<br>');
                    }
                    else {
                        document.write(c + ' : ' + Crianca[c] + ' : ' + typeof(Crianca[c]) + ' : ' + Crianca[c].valueOf() + ' : ' + typeof(Crianca[c].valueOf()) + '<br>');
                    }
                }
                
                document.write("------------------- <br>");
                var x = new String("Sanduiche de presunto, com queijo");
                document.writeln(x + '<br>');
                document.writeln(x.length + '<br>');
                document.write(x.charAt(x.length - 1) + '<br>');
                document.write(x.charCodeAt(x.length - 1) + '<br>');
                document.write(x.concat(" com queijo <br>"));
                document.write(String.fromCharCode(112) + '<br>');
                document.write(x.indexOf("de") + '<br>');
                document.write(x.lastIndexOf("de") + "<br>");
                document.write(x.replace("queijo", "catupiri") + "<br>");
                document.writeln(x.substring(6,9) + '<br>');
                document.writeln(x.substr(13,6) + '<br>');
                document.writeln(x.split(",")[0] + '<br>');
                document.writeln(x.toLowerCase() + '<br>');
                document.writeln(x.toUpperCase() + '<br>');
                document.writeln(x.big() + '<br>');
                document.writeln(x.blink() + '<br>');
                document.writeln(x.sup() + '<br>');
                document.writeln(x.strike() + '<br>'); 
                document.writeln(x.bold() + '<br>');
                document.writeln(x.small() + '<br>');
                document.writeln(x.link("http://localhost/hipno/") + '<br>');
            </script>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->
      
    </main>

    <footer class="container">
      <p>&copy; Company 2017</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/escritos.js"></script>
  </body>
</html>

        
       
            
        