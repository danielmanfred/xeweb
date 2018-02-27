<div class="starter-template">
    <div class="page-header">
        <h1>Área de cadastro de categorias</h1>
    </div>
    <div class="row espaco">
        <div class="pull-right">
            <a href="index.php?link=7"><button type='button' class='btn btn-primary btn-sm'>Listar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="processa/cad_categoria.php">
                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputNome" placeholder="Seu nome">
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
