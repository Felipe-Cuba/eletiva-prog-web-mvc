<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1>Excluir Produto</h1>

        <?php if($Sessao::retornaErro()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="" class="close" data-dismiss="alert" aria-label="close"><i class="bi bi-x-square"></i></a>
                <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                    <?php echo $mensagem; ?> <br>
                <?php } ?>
            </div>
        <?php } ?>

        <form action="http://<?php echo APP_HOST; ?>/produto/excluir" method="post" id="form_cadastro">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['produto']->getId(); ?>">

            <div class="panel panel-danger">
                <div class="panel-body">
                    Deseja realmente excluir o produto: <b><?= $viewVar['produto']->getNome() ?></b>?
                </div>
                <br />
                <div class="panel-footer"> 
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    <a href="http://<?php echo APP_HOST; ?>/produto" class="btn btn-info btn-sm">Voltar</a>
                </div>
            </div>
        </form>
    </div>
    <div class=" col-md-3"></div>
</div>
