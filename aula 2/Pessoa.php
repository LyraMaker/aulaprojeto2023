<?php

class Pessoa
{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    function __construct(string $codigo, string $nome, string $nascimento, string $titulo)
    {
        $this->definirCodigo($codigo);
        $this->definirNome($nome);
        $this->definirNascimento($nascimento);
        $this->definirEscolaridade($titulo);
    }
    function definirCodigo(int $codigo)
    {
        $this->Codigo = $codigo;
    }

    function definirNome(string $nome)
    {
        $this->Nome = $nome;
    }

    function definirAltura(int $altura)
    {
        $this->Altura = $altura;
    }

    function definirNascimento(string $data)
    {
        $this->Nascimento = $data;
    }

    function definirIdade(string $idade)
    {
        $this->Idade = $idade;
    }

    function definirEscolaridade(string $titulo)
    {
        $this->Escolaridade = $titulo;
    }

    function definirSalario(float $salario)
    {
        $this->Salario = $salario;
    }

    function Crescer(int $centimetros)
    {
        $this->Altura += $centimetros;
    }

    function Formar(string $titulo)
    {
        $this->Escolaridade = $titulo;
    }

    function Envelhecer(int $anos)
    {
        $this->Idade += $anos;
    }

}