<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Xé</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="usuario/usuario.php"> 
                    <?php
                        if (empty($_SESSION['usuarioNome'])) {
                            echo 'Perfil';
                        }
                        else {
                            echo $_SESSION['usuarioNome'];
                        }
                    ?>
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="index.php?link=7">Listar</a>
                    <a class="dropdown-item" href="index.php?link=6">Cadastrar</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="demanda/listar.php">Demandas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="negocio/listar.php">Negócios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Demandar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="oferta/listar.php">Ofertas</a>
            </li>
          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuários</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="index.php?link=2">Listar</a>
                    <a class="dropdown-item" href="index.php?link=3">Cadastrar</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
    </div>
</nav>