
   

<div class="starter-template">
    <div class="page-header">
        <h1>Área de cadastro</h1>
    </div>
    <div class="row espaco">
        <div class="pull-right">
            <a href="index.php?link=2"><button type='button' class='btn btn-primary btn-sm'>Listar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="processa/cad_usuario.php">
                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputNome" placeholder="Seu nome">
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
                        <input type="text" class="form-control" name="inputLogin" placeholder="Seu login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="inputEmail" placeholder="Seu e-mail">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSexo" class="col-sm-2 control-label">Sexo</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="inputSexo">
                            <option value="F">Feminino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
