<?php

namespace App\Models\DAO;

use App\Models\Entidades\Fornecedor;

class FornecedorDAO extends BaseDAO
{
    public function getById(int $id)
    {
        $resultado = $this->select(
            "SELECT * FROM fornecedor WHERE id = $id"
        );

        return $resultado->fetchObject(Fornecedor::class);
    }

    public function getAll()
    {
        $resultado = $this->select("SELECT * FROM fornecedor");

        return $resultado->fetchObject(Fornecedor::class);
    }

    public function salvar(Fornecedor $fornecedor)
    {
        try {
            $nome = $fornecedor->getNome();

            return $this->insert('fornecedor', ':nome', [':nome' => $nome]);
        } catch (\Exception) {
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function atualizar(Fornecedor $fornecedor)
    {
        try {
            $id = $fornecedor->getId();
            $nome = $fornecedor->getNome();

            return $this->update(
                'fornecedor',
                'nome = :nome',
                [':id' => $id, ':nome' => $nome],
                'id = :id'
            );
        } catch (\Exception $e) {
            throw new \Exception("Erro na atualização de dados.", 500);
        }
    }

    public function excluir(int $id)
    {
        try {
            return $this->delete('fornecedor', "id = $id");
        } catch (\Exception) {
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}
