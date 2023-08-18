<?php

class Conta{
    private string $numero;
    private string $nome;
    private float $saldo;

    public function __construct(string $numero, string $nome, float $saldo){
        $this->definirNome($nome);
        $this->definirNumero($numero);
        $this->definirSaldo($saldo);
    }

    private function definirNumero(string $numero){
        $this->numero = $numero;
    }
    public function definirNome(string $nome){
        $this->nome = $nome;
    }
    public function definirSaldo(float $saldo){
        $this->saldo = $saldo;
    }
    public function exibirNumero(string $numero){
        return $this->numero;
    }
    public function exibirNome(string $nome){
        return $this->nome;
    }
    public function exibirSaldo(float $saldo){
        return $this->saldo;
    }
}