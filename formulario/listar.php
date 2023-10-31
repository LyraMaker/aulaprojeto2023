<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Autor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<?php
require "./php/Conectar.php";
require "./php/Autor.php";
require "./php/RepositorioAutor.php";

$valores = (new RepositorioAutor())->exibirTudo($banco);
?>
<table class="table is-striped">
    <tr>
        <td>Código</td>
        <td>Nome Autor</td>
        <td>Endereço Autor</td>
        <td>Telefone</td>
        <td>E-mail</td>
    </tr>
    <?php foreach ($valores as $valor): ?>
        <tr>
            <td>
                <?= $valor['codigo'] ?>
            </td>
            <td>
                <?= $valor['nomeautor'] ?>
            </td>
            <td>
                <?= $valor['endautor'] ?>
            </td>
            <td>
                <?= $valor['telautor'] ?>
            </td>
            <td>
                <?= $valor['email'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>