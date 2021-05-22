<?php

namespace App\Model;

class Moeda
{
    private $id_moeda;
    private $cifra_moeda;
    private $nome_moeda;
    private $valor_moeda;

    /**
     * Get the value of id_moeda
     */
    public function getId_moeda()
    {
        return $this->id_moeda;
    }

    /**
     * Set the value of id_moeda
     *
     * @return  self
     */
    public function setId_moeda($id_moeda)
    {
        $this->id_moeda = $id_moeda;

        return $this;
    }

    /**
     * Get the value of cifra_moeda
     */
    public function getCifra_moeda()
    {
        return $this->cifra_moeda;
    }

    /**
     * Set the value of cifra_moeda
     *
     * @return  self
     */
    public function setCifra_moeda($cifra_moeda)
    {
        $this->cifra_moeda = $cifra_moeda;

        return $this;
    }

    /**
     * Get the value of nome_moeda
     */
    public function getNome_moeda()
    {
        return $this->nome_moeda;
    }

    /**
     * Set the value of nome_moeda
     *
     * @return  self
     */
    public function setNome_moeda($nome_moeda)
    {
        $this->nome_moeda = $nome_moeda;

        return $this;
    }

    /**
     * Get the value of valor_moeda
     */
    public function getValor_moeda()
    {
        return $this->valor_moeda;
    }

    /**
     * Set the value of valor_moeda
     *
     * @return  self
     */
    public function setValor_moeda($valor_moeda)
    {
        $this->valor_moeda = $valor_moeda;

        return $this;
    }
}
