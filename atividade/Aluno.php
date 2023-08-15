<?php

class Aluno{
    var string $matricula;
    var string $nome;
    var string $endereco;
    var string $codigoTurma;

    function __construct(string $m, string $n, string $e){
        $this->matricula = $m;
        $this->nome = $n;
        $this->endereco = $e;
        $this->codigoTurma = "";
    }

    function gerarCarterinha():array{
        $dado = [];
        $dado['Matricula'] = $this->matricula;
        $dado['Nome'] =$this->nome;
        $dado['Endereco'] = $this->endereco;
        $dado['Turma'] = $this->codigoTurma;

        return $dado;
    }
}