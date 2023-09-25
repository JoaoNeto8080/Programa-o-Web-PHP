<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação de Nomes de Alunos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Ordenação de Nomes de Alunos</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="alunos">Digite o nome de 10 alunos:</label>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo '<input type="text" class="form-control" id="aluno' . $i . '" name="alunos[]" placeholder="Aluno ' . $i . '" required>';
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Ordenar Nomes</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $alunos = $_POST["alunos"];

            // Ordena os nomes em ordem alfabética
            sort($alunos);

            // Exibe os nomes ordenados em uma tabela
            echo '<h3>Nomes em ordem alfabética:</h3>';
            echo '<table class="table table-bordered">';
            echo '<thead><tr><th>#</th><th>Nome do Aluno</th></tr></thead>';
            echo '<tbody>';
            foreach ($alunos as $key => $aluno) {
                echo '<tr><td>' . ($key + 1) . '</td><td>' . $aluno . '</td></tr>';
            }
            echo '</tbody>';
            echo '</table>';
        }
        ?>
    </div>
</body>
</html>
