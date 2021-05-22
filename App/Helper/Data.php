<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa é a classe onde implementei a conversão de datas, necessária para que as datas sejam gravadas no banco de dados e/ou mostradas em tela quando necessário */
namespace App\Helper;


class Data {
    static public function get($data)
    {
        if (!empty($data))
            return date("d/m/Y", strtotime($data));
        else return "";
    }

    static public function set($data)
    {
        $data = str_replace('/', '-', $data);
        return date("Y-m-d", strtotime($data));
    }
}
