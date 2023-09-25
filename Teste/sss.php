<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <!-- Inclua o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Cliente</h2>
        <form method="post" action="processar_formulario.php" enctype="multipart/form-data">
            <!-- Campos anteriores aqui ... -->
            <div class="form-group">
                <label for="fotoPerfil">Foto de Perfil:</label>
                <input type="file" class="form-control-file" id="fotoPerfil" name="fotoPerfil" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
