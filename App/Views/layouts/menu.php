<header>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://<?php echo APP_HOST; ?>">FATEC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= ($viewVar['nameController'] == "HomeController") ? 'active' : '' ?>" aria-current="page" href="http://<?php echo APP_HOST; ?>">Home</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link <?= ($viewVar['nameController'] == "UsuarioController") ? 'active' : '' ?>" href="http://<?php echo APP_HOST; ?>/usuario/cadastro">Cadastro de Usuário</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= ($viewVar['nameController'] == "ProdutoController") ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown">Produtos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/produto">Lista de Produtos</a></li>
              <li><a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/produto/cadastro">Cadastro de Produto</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= ($viewVar['nameController'] == "FornecedorController") ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown">Fornecedores</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/fornecedor">Lista de Fornecedores</a></li>
              <li><a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/fornecedor/cadastro">Cadastro de Fornecedor</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>