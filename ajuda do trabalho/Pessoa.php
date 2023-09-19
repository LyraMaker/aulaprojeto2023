<?php

class Pessoa{
    // Primeiro defina as variáveis.
    private $codigo;
    private $nome;
    private $idade;
//Função que vai executar ao ser instanciado o objeto
    public function __construct(string $codigo, string $nome, string $idade){
        $this->definirCodigo($codigo);
        $this->definirNome($nome);
        $this->definirIdade($idade);
    }
    //Funções de operações dos objetos
    public function definirCodigo(string $codigo){
        $this->codigo = $codigo;
    }

    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirIdade(int $idade){
        $this->idade = $idade;
    }

    public function exibirCodigo(){
        return $this->codigo;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirIdade(){
        return $this->idade;
    }
}