<?php
    $id = null;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (empty($id)) {
            trigger_error("Categoria não identificada", E_USER_ERROR);
        }
    }
    else {
        die ("Edição cancelada");
    }
    
    $sql = "SELECT * FROM item WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($result);
?>
<div class="starter-template">
    <div class="page-header">
        <h1>Editar Categoria</h1>
    </div>
    <div class="row espaco">
        <div class="pull-right">
            <a href="index.php?link=7"><button type='button' class='btn btn-primary btn-sm'>Listar</button></a>
        </div>
    </div>
    <div class="row">    
        <form class="form-horizontal" method="POST" action="processa/edit_categoria.php">
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputNome" placeholder="Seu nome" 
                           value="<?php echo $linha['nome']; ?>">
                </div>
            </div>       
            <input type="hidden" name="id" value="
                    <?php 
                        echo $linha['id'];
                    ?>
                ">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Editar</button>
                </div>
            </div>
        </form>
    </div>
</div>

