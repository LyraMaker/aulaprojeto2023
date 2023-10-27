<?php
require "./php/Autor.php";
require "./php/RepositorioAutor.php";

$codigo = $_POST['txtCodigo'];
$nome =  $_POST['txtNome'];
$endereco = $_POST['txtEndereco'];
$telefone = $_POST['txtTelefone'];
$email = $_POST['txtEmail'];

$novoAutor = new Autor($codigo,$nome,$endereco,$telefone,$email);

var_dump($novoAutor);