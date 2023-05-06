<?php

namespace App\Models\Validacao;

use App\Models\Entidades\Fornecedor;
use \App\Models\Validacao\ResultadoValidacao;

class FornecedorValidador
{

    public function validar(Fornecedor $fornecedor)
    {
        $resultadoValidacao = new ResultadoValidacao();

        if (empty($fornecedor->getNome())) {
            $resultadoValidacao->addErro('nome', "Nome: Este campo não pode ser vazio");
        }

        return $resultadoValidacao;
    }
}
