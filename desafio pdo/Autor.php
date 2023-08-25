<?php

class Autor{
    private string $NomeAutor;
    private string $EndAutor;
    private string $TelAutor;
    private string $Email;

    public function __construct(string $n,string $e, string $t, string $em){
        $this->definirNomeAutor($n);
        $this->definirEndAutor($e);
        $this->definirTelAutor($t);
        $this->definirEmail($em);
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
    public function exibirNomeAutor(string $n){
        return $this->NomeAutor;
    }
    public function exibirEndAutor(string $e){
        return $this->EndAutor;
    }

    public function exibirTelAutor(string $te){
        return $this->TelAutor;
    }

    public function exibirEmail(string $em){
        return $this->Email;
    }
}