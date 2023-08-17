<?php

class Conta{
    var $numero;
    var $nome;
    var $saldo;

    function __construct(string $numero, string $nome, float $saldo){
        $this->definirNome($nome);
        $this->definirNumero($numero);
        $this->definirSaldo($saldo);
    }

    function definirNumero(string $numero){
        $this->numero = $numero;
    }
    function definirNome(string $nome){
        $this->nome = $nome;
    }
    function definirSaldo(float $saldo){
        $this->saldo = $saldo;
    }
    function exibirNumero(string $numero){
        return $this->numero;
    }
    function exibirNome(string $nome){
        return $this->nome;
    }
    function exibirSaldo(float $saldo){
        return $this->saldo;
    }
}