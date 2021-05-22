<?php

namespace App\Model;

class Cambio
{
    private $id_cambio;
    private $id_moeda;
    private $id_cliente;
    private $nome_cliente;
    private $nome_moeda;
    private $cifra_moeda;
    private $valor_moeda;
    private $moeda_origem;
    private $moeda_destino;
    private $data_cambio;
    private $valor_original;
    private $valor_convertido;
    private $taxa_cobrada;

      /**
     * Get the value of id_cambio
     */
    public function getId_cambio()
    {
        return $this->id_cambio;
    }

    /**
     * Set the value of id_cambio
     *
     * @return  self
     */
    public function setId_cambio($id_cambio)
    {
        $this->id_cambio = $id_cambio;

        return $this;
    }

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

    /**
     * Get the value of moeda_origem
     */
    public function getMoeda_origem()
    {
        return $this->moeda_origem;
    }

    /**
     * Set the value of moeda_origem
     *
     * @return  self
     */
    public function setMoeda_origem($moeda_origem)
    {
        $this->moeda_origem = $moeda_origem;

        return $this;
    }

    /**
     * Get the value of moeda_destino
     */
    public function getMoeda_destino()
    {
        return $this->moeda_destino;
    }

    /**
     * Set the value of moeda_destino
     *
     * @return  self
     */
    public function setMoeda_destino($moeda_destino)
    {
        $this->moeda_destino = $moeda_destino;

        return $this;
    }

    /**
     * Get the value of data_cambio
     */
    public function getData_cambio()
    {
        return $this->data_cambio;
    }

    /**
     * Set the value of data_cambio
     *
     * @return  self
     */
    public function setData_cambio($data_cambio)
    {
        $this->data_cambio = $data_cambio;

        return $this;
    }

    /**
     * Get the value of valor_original
     */
    public function getValor_original()
    {
        return $this->valor_original;
    }

    /**
     * Set the value of valor_original
     *
     * @return  self
     */
    public function setValor_original($valor_original)
    {
        $this->valor_original = $valor_original;

        return $this;
    }

    /**
     * Get the value of valor_convertido
     */
    public function getValor_convertido()
    {
        return $this->valor_convertido;
    }

    /**
     * Set the value of valor_convertido
     *
     * @return  self
     */
    public function setValor_convertido($valor_convertido)
    {
        $this->valor_convertido = $valor_convertido;

        return $this;
    }

    /**
     * Get the value of taxa_cobrada
     */
    public function getTaxa_cobrada()
    {
        return $this->taxa_cobrada;
    }

    /**
     * Set the value of taxa_cobrada
     *
     * @return  self
     */
    public function setTaxa_cobrada($taxa_cobrada)
    {
        $this->taxa_cobrada = $taxa_cobrada;

        return $this;
    }
}
