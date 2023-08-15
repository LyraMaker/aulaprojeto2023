<?php

class Conta
{
    var $Numero;
    var $Dono;
    var $Saldo;
    var $Limite;

    function __construct(string $numero, string $dono, float $saldo, float $limite)
    {
        $this->Numero = $numero;
        $this->Dono = $dono;
        $this->Saldo = $saldo;
        $this->Limite = $limite;
    }

    function sacar(float $qtd): bool
    {

        if (-$this->Limite < $this->Saldo) {
            
            $this->Saldo -= $qtd;
            return true;
        }
        return false;
    }

    function depositar(float $qtd): void
    {
        $this->Saldo += $qtd;
    }
}