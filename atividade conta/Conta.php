<?php

class Conta
{
    private string $numero;
    private string $nome;
    private float $saldo;

    public function __construct(string $numero, string $nome, float $saldo)
    {
        $this->definirNome($nome);
        $this->definirNumero($numero);
        $this->definirSaldo($saldo);
    }

    private function definirNumero(string $numero)
    {
        $this->numero = $numero;
    }
    public function definirNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function definirSaldo(float $saldo)
    {
        $this->saldo = $saldo;
    }
    public function exibirNumero(): string
    {
        return $this->numero;
    }
    public function exibirNome(): string
    {
        return $this->nome;
    }
    public function exibirSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar(float $qnt)
    {
        if ($qnt < 0) {
            return "Não é permitido saque de valor negativo! 👹";
        }

        if (($this->exibirSaldo() > $qnt)) {
            $this->saldo -= $qnt;
            return $this->exibirSaldo();
        }
        return "Valor do saque maior que a quantidade disponível! 🫠";
    }

    public function depositar(float $qnt)
    {
        $this->saldo += $qnt;
        return $this->exibirSaldo();
    }
}