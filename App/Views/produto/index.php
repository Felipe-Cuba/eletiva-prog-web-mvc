<div class="container">
    <div class="row">
        <br>
        <div class="col-md-12">
            <a href="http://<?= APP_HOST ?>/produto/cadastro" class="btn btn-success btn-sm">Adicionar</a>
            <hr>
        </div>
        <div class="col-md-12">
            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="" class="close" data-dismiss="alert" aria-label="close"><i class="bi bi-x-square"></i></a>
                    <?php echo $Sessao::retornaMensagem(); ?>
                </div>
            <?php } ?>

            <?php if(!count($viewVar['listaProdutos'])){ ?>
                <div class="alert alert-info" role="alert">Nenhum produto encontrado</div>
            <?php } else { ?>                
                <div class="table-responsive">
                    <table class="table table-bordered text-center table-hover">
                        <tr class="table-success">
                            <td class="info">Nome</td>
                            <td class="info">Preço</td>
                            <td class="info">Quantidade</td>
                            <td class="info">Data Cadastro</td>
                            <td class="info">Ação</td>
                        </tr>
                        <?php foreach($viewVar['listaProdutos'] as $produto) { ?>
                            <tr>
                                <td><?= $produto->getNome() ?></td>
                                <td style="width:15%">R$ <?= $produto->getPreco() ?></td>
                                <td style="width:15%"><?= $produto->getQuantidade() ?></td>
                                <td style="width:15%"><?= $produto->getDataCadastro()->format('d/m/Y') ?></td>
                                <td style="width:15%">
                                    <a href="http://<?= APP_HOST ?>/produto/edicao/<?= $produto->getId() ?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?= APP_HOST ?>/produto/exclusao/<?= $produto->getId() ?>" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>