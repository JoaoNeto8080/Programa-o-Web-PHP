<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Nomes em um Arquivo TXT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Salvar Nomes em um Arquivo TXT</h1>
        <form action="salvar_nomes.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <h2>Nomes Salvos:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Aqui você pode ler o arquivo TXT e exibir os nomes
                $lines = file('nomes.txt', FILE_IGNORE_NEW_LINES);
                foreach ($lines as $key => $line) {
                    echo "<tr><td>" . ($key + 1) . "</td><td>$line</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
