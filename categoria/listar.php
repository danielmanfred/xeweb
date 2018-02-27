    <main role="main" class="container">
        
      <div class="starter-template">
          
        <h1>Xé - Categorias</h1>
        
        <div class="pull-right">
            <a href="index.php?link=6"><button type='button' class='btn btn-success btn-sm'>Cadastrar</button></a>
        </div> 
        
        <table class="table table-hover">
            <thead>
            <th>Categorias</th>
            </thead>
            <tbody>
            <?php
                $sql = 'SELECT * FROM categoria ORDER BY nome';
                $resultado = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    
            ?>
                    <td>
                        <a href="index.php?link=8&id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-primary btn-sm'>Visualizar</button></a>
                        <a href="index.php?link=9&id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-warning btn-sm'>Editar</button></a>
                        <a href="processa/delete_categoria.php?id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-danger btn-sm'>Apagar</button></a>
                    </td>
            <?php   
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
      </div>

    </main><!-- /.container -->
