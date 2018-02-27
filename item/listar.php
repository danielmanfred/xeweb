    <main role="main" class="container">
        
      <div class="starter-template">
          
        <h1>Xé - Itens</h1>
        
        <div class="pull-right">
            <a href="index.php?link=10"><button type='button' class='btn btn-success btn-sm'>Cadastrar</button></a>
        </div> 
        
        <table class="table table-hover">
            <thead>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preco</th>
            <th>Situação</th>
            </thead>
            <tbody>
            <?php
                $sql = 'SELECT * FROM item ORDER BY nome';
                $resultado = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['descricao'] . '</td>';
                    echo '<td>' . $linha['preco'] . '</td>';
                    echo '<td>' . $linha['situacao_id'] . '</td>';
            ?>
                    <td>
                        <a href="index.php?link=12&id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-primary btn-sm'>Visualizar</button></a>
                        <a href="index.php?link=13&id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-warning btn-sm'>Editar</button></a>
                        <a href="processa/delete_item.php?id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-danger btn-sm'>Apagar</button></a>
                    </td>
            <?php   
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
      </div>

    </main><!-- /.container -->
        
