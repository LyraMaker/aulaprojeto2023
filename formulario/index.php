<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Autor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <form action="cadastrar.php" method="POST" class="m-6">
        <div class="field">
            <label class="label">Código</label>
            <div class="control">
                <input class="input" type="text" name="txtCodigo">
            </div>
        </div>
        <div class="field">
            <label class="label">Nome</label>
            <div class="control">
                <input class="input" type="text" name="txtNome">
            </div>
        </div>
        <div class="field">
            <label class="label">Endereço</label>
            <div class="control">
                <input class="input" type="text" name="txtEndereco">
            </div>
        </div>
        <div class="field">
            <label class="label">Telefone</label>
            <div class="control">
                <input class="input" type="text" name="txtTelefone">
            </div>
        </div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="text" name="txtEmail">
            </div>
        </div>

        <button type="submit" class="button is-primary">Cadastrar</button>
    </form>
</body>

</html>