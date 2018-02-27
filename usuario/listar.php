  
    <main role="main" class="container">
  
        <div class="starter-template">  
       
        <div class="page-header">
           <h1>Xé - Lista de Usuários</h1>
        </div>

        <div class="pull-right">
            <a href="index.php?link=3"><button type='button' class='btn btn-success btn-sm'>Cadastrar</button></a>
        </div>            
            
        <table class="table table-hover">
            <thead>
            <th>Nome</th>
            <th>Nota</th>
            <th>Sexo</th>
            <th>Login</th>
            <th>E-mail</th>
            <th>Premium</th>
            <th>Moeda</th>
            <th>Ações</th>
            </thead>
            <tbody>
            <?php
                $sql = 'SELECT * FROM usuario ORDER BY nome';
                $resultado = mysqli_query($conexao, $sql);
                $quantidade = mysqli_num_rows($resultado);
                
                
                function informarQuantidade() {
                    
                    echo '<h6>Quantidade de usuários cadastrados: ' . $GLOBALS['quantidade'] . '</h6>';
                }
                
                informarQuantidade();
                
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['nota'] . '</td>';
                    $sexo = $linha['sexo'] == 'F' ? 'Feminino' : 'Masculino';
                    echo '<td>' . $sexo . '</td>';
                    echo '<td>' . $linha['login'] . '</td>';
                    echo '<td><a href="mailto:' . $linha['email'] . '?Subject=Feliz ano novo">' . $linha['email'] 
                            . '</a></td>';
                    $premium = $linha['premium'] == false ? 'Não' : 'Sim';
                    echo '<td>' . $premium . '</td>';
                    echo '<td>' . $linha['moeda'] . '</td>';
                    ?>
                    <td>
                        <a href="index.php?link=5&id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-primary btn-sm'>Visualizar</button></a>
                        <a href="index.php?link=4&id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-warning btn-sm'>Editar</button></a>
                        <a href="processa/delete_usuario.php?id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-danger btn-sm'>Apagar</button></a>
                    </td>
                    <?php
                    echo '</tr>';
                }

            ?>
            </tbody>
        </table>
      </div>
        
    </main><!-- /.container -->
