<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1>Cadastro de Usuário</h1>
       
        <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
        <?php } ?>

        <form action="http://<?php echo APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro">
            <br />
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
            </div>
            <br />
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Seu e-mail" value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" required>
            </div>
            <br />
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>