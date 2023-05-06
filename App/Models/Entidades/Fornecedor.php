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


    public function setId(int $value)
    {
        $this->id = $value;
    }

    public function setNome(string $value)
    {
        $this->nome = $value;
    }
    

    public function getData()
    {
        return $this->data_cadastro;
    }
}
