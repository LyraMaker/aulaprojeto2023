<?php

abstract class Pessoa
{
    private string $id;
    private string $nome;
    private string $endereco;

    public function __construct(string $id, string $nome, string $endereco)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setEndereco($endereco);
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }
}