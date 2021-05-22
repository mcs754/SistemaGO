<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa é a classe principal do padrão MVC onde ficam os métodos que proverão acesso com alterações no banco de dados quando se tratar de CAMBIO */
namespace App\DAO;

class CambioDAO extends Conexao
{
    public function inserir($cambio)
    {
        $sql = "insert into cambio (id_cliente, taxa_cobrada, data_cambio, valor_original, moeda_origem, moeda_destino, valor_convertido) values (:id_cliente, :taxa_cobrada, :data_cambio, :valor_original, :moeda_origem, :moeda_destino, :valor_convertido)";
        try {
            $i = $this->conexao->prepare($sql);
            $i->bindValue(":id_cliente", $cambio->getId_cliente());
            $i->bindValue(":taxa_cobrada", $cambio->getTaxa_cobrada());
            $i->bindValue(":data_cambio", $cambio->getData_cambio());
            $i->bindValue(":valor_original", $cambio->getValor_original());
            $i->bindValue(":moeda_origem", $cambio->getMoeda_origem());
            $i->bindValue(":moeda_destino", $cambio->getMoeda_destino());
            $i->bindValue(":valor_convertido", $cambio->getValor_convertido());
            $i->execute();
            return true;
        } catch (\PDOException $e) {
            echo "<div class='alert-danger'>{$e->getMessage()}</div>";
        }
    }

    public function pesquisar()
    {
        $sql = "select cliente.nome_cliente, cambio.id_cambio, cambio.id_cliente, cambio.taxa_cobrada, cambio.data_cambio, cambio.valor_original, cambio.moeda_origem, cambio.moeda_destino, cambio.valor_convertido from cambio inner join cliente on cambio.id_cliente = cliente.id_cliente order by data_cambio";
        try {
            $a = $this->conexao->prepare($sql);
            $a->execute();
            return $a->fetchAll(\PDO::FETCH_CLASS, "\App\Model\Cambio");
        } catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }

    public function pesquisarUm($cambio) {
        $sql = "select * from cambio inner join cliente on cambio.id_cliente = cliente.id_cliente where id_cambio = :id_cambio;";
        try {
            $a = $this->conexao->prepare($sql);
            $a->bindValue(":id_cambio", $cambio->getId_cambio());
            $a->execute();
            return $a->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }
}
