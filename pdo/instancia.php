<?php
require "classe/Pet.php";
require "classe/Conexao.php";

$zezin = new Pet("0001", "Zezinho", "Jorge", "Pterosauro"); //instanciando o pet

$banco = (new Conexao)->obterBanco(); //crio a instancia do banco

$tabela = "CREATE TABLE IF NOT EXISTS pet(codigo TEXT, nome TEXT, dono TEXT, tipo TEXT,
primary key(codigo))"; //codigo sql para criar a tabela do pet, caso não exista

$banco->query($tabela); //executando o código da tabela no banco

$dadoZezin = "INSERT INTO pet (codigo,nome,dono,tipo) VALUES(:c,:n,:d,:t)"; 
//criando o comando sql com parametros na criação do registro
                                                                             
$dado = $banco->prepare($dadoZezin); //permite definir os valores dos parametros

$codigo = $zezin->exibirCodigo();
$nome = $zezin->exibirNome();
$dono = $zezin->exibirDono();
$tipo = $zezin->exibirTipo();

$dado->bindParam(':c',$codigo);  $dado->bindParam(':n',$nome); $dado->bindParam(':d',$dono);
$dado->bindParam(':t',$tipo);

$dado->execute(); //executa o cadastro no banco
