<?php

class Juridica extends Pessoa
{
    private $cnpj;
    public function __construct(string $id, string $nome, string $endereco,string $cnpj)
    {
        parent::__construct($id, $nome, $endereco);
        $this->setCnpj($cnpj);
    }
    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;
    }
}