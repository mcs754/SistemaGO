<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa é a classe principal do padrão MVC onde ficam os métodos que proverão acesso com alterações no banco de dados quando se tratar de CLIENTE */
namespace App\DAO;

class ClienteDAO extends Conexao
{
    public function inserir($cliente)
    {
        $sql = "insert into cliente (nome_cliente) values (:nome_cliente)";
        try {
            $i = $this->conexao->prepare($sql);
            $i->bindValue(":nome_cliente", $cliente->getNome_cliente());
            $i->execute();
            return true;
        } catch (\PDOException $e) {
            echo "<div class='alert-danger'>{$e->getMessage()}</div>";
        }
    }

    public function pesquisar()
    {
        $sql = "select cliente.id_cliente, cliente.nome_cliente from cliente order by cliente.nome_cliente;";
        try {
            $a = $this->conexao->prepare($sql);
            $a->execute();
            return $a->fetchAll(\PDO::FETCH_CLASS, "\App\Model\Cliente");
        } catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }
}
