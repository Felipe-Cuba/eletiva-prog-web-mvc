<div class="container">
    <div class="row">
        <br>
        <div class="col-md-12">
            <a href="http://<?= APP_HOST ?>/fornecedor/cadastro" class="btn btn-success btn-sm">Adicionar</a>
            <hr>
        </div>
        <div class="col-md-12">
            <?php if ($Sessao::retornaMensagem()) { ?>
                <div class="alert alert-warning" role="alert">
                    <a href="" class="close" data-dismiss="alert" aria-label="close"><i class="bi bi-x-square"></i></a>
                    <?php echo $Sessao::retornaMensagem(); ?>
                </div>
            <?php } ?>

            <?php if (!count($viewVar['listaFornecedores'])) { ?>
                <div class="alert alert-info" role="alert">Nenhum fornecedor encontrado</div>
            <?php } else { ?>
                <div class="table-responsive">
                    <table class="table table-bordered text-center table-hover">
                        <tr class="table-success">
                            <td class="info">Nome</td>
                            <td class="info">Data Cadastro</td>
                            <td class="info">Ação</td>
                        </tr>
                        <?php foreach ($viewVar['listaFornecedores'] as $fornecedor) { ?>
                            <tr>
                                <td>
                                    <?= $fornecedor->getNome() ?>
                                </td>
                                <td style="width:15%">
                                    <?= $fornecedor->getData()->format('d/m/Y') ?>
                                </td>
                                <td style="width:15%">
                                    <a href="http://<?= APP_HOST ?>/fornecedor/edicao/<?= $fornecedor->getId() ?>"
                                        class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?= APP_HOST ?>/fornecedor/exclusao/<?= $fornecedor->getId() ?>"
                                        class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>