<?php

class Autor{
    private string $Codigo;
    private string $NomeAutor;
    private string $EndAutor;
    private string $TelAutor;
    private string $Email;

    public function __construct(string $c,string $n,string $e, string $t, string $em){
        $this->definirCodigo($c);
        $this->definirNomeAutor($n);
        $this->definirEndAutor($e);
        $this->definirTelAutor($t);
        $this->definirEmail($em);
    }

    public function definirCodigo(string $c){
        $this->Codigo = $c;
    }
    public function definirNomeAutor(string $n){
        $this->NomeAutor = $n;
    }
    public function definirEndAutor(string $e){
        $this->EndAutor = $e;
    }

    public function definirTelAutor(string $te){
        $this->TelAutor = $te;
    }

    public function definirEmail(string $em){
        $this->Email = $em;
    }
    public function exibirCodigo(){
        return $this->Codigo;
    }
    public function exibirNomeAutor(){
        return $this->NomeAutor;
    }
    public function exibirEndAutor(){
        return $this->EndAutor;
    }

    public function exibirTelAutor(){
        return $this->TelAutor;
    }

    public function exibirEmail(){
        return $this->Email;
    }
}