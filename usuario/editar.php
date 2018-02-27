<?php
    $id = null;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (empty($id)) {
            trigger_error("Usuário não identificado", E_USER_ERROR);
        }
    }
    else {
        die ("Edição cancelada");
    }
    
    $sql = "SELECT * FROM usuario WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($result);
?>
<div class="starter-template">
    <div class="page-header">
        <h1>Editar Usuário</h1>
    </div>
    <div class="row espaco">
        <div class="pull-right">
            <a href="index.php?link=2"><button type='button' class='btn btn-primary btn-sm'>Listar</button></a>
        </div>
    </div>
    <div class="row">    
        <form class="form-horizontal" method="POST" action="processa/edit_usuario.php">
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputNome" placeholder="Seu nome" 
                           value="<?php echo $linha['nome']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSenha" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="inputSenha" placeholder="Sua senha">
                </div>
            </div>
            <div class="form-group">
                <label for="inputLogin" class="col-sm-2 control-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputLogin" placeholder="Seu login"
                           value="<?php echo $linha['login']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="inputEmail" placeholder="Seu e-mail"
                               value="<?php echo $linha['email']; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="inputSexo" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                    <select class="form-control" name="inputSexo">
                        <option>Selecione</option>
                        <option value="F" 
                                <?php 
                                    if ($linha['sexo'] == 'F') {
                                        echo "selected";
                                    }
                                ?>
                                >Feminino</option>
                        <option value="M" 
                                <?php 
                                    if ($linha['sexo'] == 'M') {
                                        echo "selected";
                                    }
                                ?>
                                >Masculino</option>
                    </select>
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

