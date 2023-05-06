<?php

namespace App\Models\Entidades;

class Fornecedor
{
    private int $id;
    private string $nome;
    private string $data_cadastro;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getData()
    {
        return $this->data_cadastro;
    }
}
