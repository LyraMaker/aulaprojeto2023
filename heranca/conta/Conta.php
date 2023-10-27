<?php

abstract class Conta 
{
    private string $numero;
    private string $agencia;
    private float $saldo;

    public function __construct(string $numero, string $agencia)
    {
        $this->setNumero($numero);
        $this->setAgencia($agencia);
        $this->saldo = 0;
    }
    public function getNumero(): string
    {
        return $this->numero;
    }
    public function getAgencia(): string
    {
        return $this->agencia;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setNumero(string $numero)
    {
        $this->numero = $numero;
    }
    public function setAgencia(string $agencia)
    {
        $this->agencia = $agencia;
    }
  
    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }
    public function saque(float $valor)
    {
        $this->saldo -= $valor;
    }

}