<?php

class RepositorioPessoa{
    
    public function cadastrar(Pessoa $pessoa, PDO $pdo){
        //Preparando a instrução SQL para criar o registro na tabela
        $codigoSql = "INSERT INTO PESSOA(codigo,nome,idade) VALUES (:c,:n,:i)";
    
        $codigo = $pessoa->exibirCodigo();
        $nome = $pessoa->exibirNome();
        $idade = $pessoa->exibirIdade();

        //Vou preparar as instruções
        $inserir = $pdo->prepare($codigoSql);
        //Definindo o valor dos parâmetros
        $inserir->bindParam(":c",$codigo);
        $inserir->bindParam(":n",$nome);
        $inserir->bindParam(":i",$idade);
        //Executa o comando de inserir no banco
        $inserir->execute();
    }

    public function listar(PDO $banco) {
        $sql = "SELECT * FROM PESSOA";

        //Executa o sql do banco 
        $select = $banco->query($sql);

        //Estrutura os valores como obtidos pelo $select como um vetor indexado 
        return $select->fetchAll(PDO::FETCH_ASSOC); 
    }
}