<?php

namespace App\Model;

class Cliente
{
    private $id_cliente;
    private $nome_cliente;

    /**
     * Get the value of id_cliente
     */
    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    /**
     * Set the value of id_cliente
     *
     * @return  self
     */
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

    /**
     * Get the value of nome_cliente
     */
    public function getNome_cliente()
    {
        return $this->nome_cliente;
    }

    /**
     * Set the value of nome_cliente
     *
     * @return  self
     */
    public function setNome_cliente($nome_cliente)
    {
        $this->nome_cliente = $nome_cliente;

        return $this;
    }
}
