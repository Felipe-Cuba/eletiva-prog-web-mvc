<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\FornecedorDAO;
use App\Models\Entidades\Fornecedor;
use App\Models\Validacao\FornecedorValidador;

class FornecedorController extends Controller
{
    public function index()
    {
        $forncedorDao = new FornecedorDAO();

        self::setViewParam('listaFornecedores', $forncedorDao->getAll());

        $this->render('fornecedor/index');

        Sessao::limpaMensagem();
    }

    public function cadastro()
    {
        $this->render('fornecedor/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    public function salvar()
    {
        $Fornecedor = new Fornecedor();

        $Fornecedor->setNome($_POST['nome']);

        Sessao::gravaFormulario($_POST);

        $fornecedorValidador = new FornecedorValidador();

        $resultadoValidacao = $fornecedorValidador->validar($Fornecedor);

        if ($resultadoValidacao->getErros()) {
            Sessao::gravaErro($resultadoValidacao->getErros());

            $this->redirect('/fornecedor/cadastro');
        }
    }

    public function edicao($params)
    {
        $id = $params[0];

        $fornecedorDAO = new FornecedorDAO();

        $fornecedor = $fornecedorDAO->getById($id);

        if (!$fornecedor) {
            Sessao::gravaMensagem("Fornecedor inexistente");

            $this->redirect('/fornecedor');
        }

        self::setViewParam('fornecedor', $fornecedor);

        $this->render('/produto/editar');

        Sessao::limpaMensagem();
    }

    public function atualizar()
    {
        $Fornecedor = new Fornecedor();

        $Fornecedor->setNome($_POST['nome']);

        Sessao::gravaFormulario($_POST);

        $fornecedorValidador = new FornecedorValidador();

        $resultadoValidacao = $fornecedorValidador->validar($Fornecedor);

        if ($resultadoValidacao->getErros()) {
            Sessao::gravaErro($resultadoValidacao->getErros());

            $this->redirect('/fornecedor/edicao' . $_POST['id']);
        }

        $fornecedorDAO = new FornecedorDAO();

        $fornecedorDAO->atualizar($Fornecedor);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/fornecedor');
    }

    public function exclusao($params)
    {
        $id = $params[0];

        $fornecedorDAO = new FornecedorDAO();

        $fornecedor = $fornecedorDAO->getAll();

        if (!$fornecedor) {
            Sessao::gravaMensagem("Fornecedor inexistente");

            $this->redirect('/fornecedor');
        }

        self::setViewParam('fornecedor', $fornecedor);

        $this->render('/fornecedor/exclusao');

        Sessao::limpaMensagem();
    }

    public function excluir()
    {
        $Fornecedor = new Fornecedor();

        $Fornecedor->setId($_POST['id']);

        $fornecedorDAO = new FornecedorDAO();

        if (!$fornecedorDAO->excluir($Fornecedor->getId())) {
            Sessao::gravaMensagem('Fornecedor inexistente');
            $this->redirect('/fornecedor');
        }

        Sessao::gravaMensagem("Fornecedor excluido com sucesso!");

        $this->redirect('/fornecedor');
    }
}