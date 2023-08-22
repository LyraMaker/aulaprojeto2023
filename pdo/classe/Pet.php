<?php

class Pet
{
    private string $codigo;
    private string $nome;
    private string $dono;
    private string $tipo;

    public function __construct(string $c, string $n, string $d, string $t)
    {
        $this->definirCodigo($c);
        $this->definirDono($d);
        $this->definirNome($n);
        $this->definirTipo($t);
    }

    private function definirCodigo(string $c)
    {
        $this->codigo = $c;
    }
    public function definirNome(string $n)
    {
        $this->nome = $n;
    }
    public function definirDono(string $d)
    {
        $this->dono = $d;
    }
    public function definirTipo(string $t)
    {
        $this->tipo = $t;
    }
    public function exibirCodigo()
    {
        return $this->codigo;
    }
    public function exibirNome()
    {
        return $this->nome;
    }
    public function exibirDono()
    {
        return $this->dono;
    }
    public function exibirTipo()
    {
        return $this->tipo;
    }
}