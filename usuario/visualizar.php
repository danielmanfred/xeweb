<?php
    $id = null;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    else {
        die ("Visualização cancelada");
    }
    
    $sql = "SELECT * FROM usuario WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($result);
?>
<div class="starter-template">
    <div class="page-header">
        <h1>Visualizar Usuário</h1>
    </div>
    <div class="row">
        <div class="pull-right">
            <a href="index.php?link=2"><button type='button' class='btn btn-primary btn-sm'>Listar</button></a>
            <a href="index.php?link=4&id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-warning btn-sm'>Editar</button></a>
            <a href="processa/delete_usuario.php?id=<?php echo $linha['id']; ?>"><button type='button' class='btn btn-danger btn-sm'>Apagar</button></a>
        </div>
    </div>
    <div class="row">    
        <div class="col-md-12">
            <div class="col-md-1">
                <b>Nome:</b>
            </div>
            <div class="col-md-11">
                <?php
                    echo $linha['nome'];
                ?>
            </div>
            
            <div class="col-md-1">
                <b>Login:</b>
            </div>
            <div class="col-md-11">
                <?php
                    echo $linha['login'];
                ?>
            </div>
            
            <div class="col-md-1">
                <b>Sexo:</b>
            </div>
            <div class="col-md-11">
                <?php
                    echo $linha['sexo'] == 'F' ? "Feminino" : "Masculino";
                ?>
            </div>
        </div>
    </div>
</div>


