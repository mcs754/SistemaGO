<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa é a classe principal do padrão MVC onde ficam os métodos que proverão acesso com alterações no banco de dados quando se tratar de MOEDA */
namespace App\DAO;

class MoedaDAO extends Conexao
{
    public function inserir($moeda)
    {
        $sql = "insert into moeda (cifra_moeda, nome_moeda, valor_moeda) values (:cifra_moeda, :nome_moeda, :valor_moeda)";
        try {
            $i = $this->conexao->prepare($sql);
            $i->bindValue(":cifra_moeda", $moeda->getCifra_moeda());
            $i->bindValue(":nome_moeda", $moeda->getNome_moeda());
            $i->bindValue(":valor_moeda", $moeda->getValor_moeda());
            $i->execute();
            return true;
        } catch (\PDOException $e) {
            echo "<div class='alert-danger'>{$e->getMessage()}</div>";
        }
    }

    public function pesquisar()
    {
        $sql = "select moeda.id_moeda, moeda.cifra_moeda, moeda.nome_moeda, moeda.valor_moeda from moeda order by moeda.nome_moeda;";
        try {
            $a = $this->conexao->prepare($sql);
            $a->execute();
            return $a->fetchAll(\PDO::FETCH_CLASS, "\App\Model\Moeda");
        } catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }
}
