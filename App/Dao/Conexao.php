<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa é a classe onde implementei o método de conexão ao banco de dados que será acessada sempre que for necessária uma conexão
## ATENÇÃO, É NESTA CLASSE QUE A SENHA DO SEU BANCO DE DADOS DEVERÁ SER INFORMADA*/
namespace App\DAO;

class Conexao
{
    protected $conexao;
    private $database = "db_sistemago";
    private $host = "localhost";
    private $user = "root";
    private $senha = "123456"; ## SENHA DO SEU BANCO DE DADOS AQUI
    public function __construct()
    {
        $this->conexao = new \PDO("mysql:dbname={$this->database}; host={$this->host}", "{$this->user}", "{$this->senha}");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}
