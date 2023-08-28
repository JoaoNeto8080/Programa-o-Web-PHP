<!DOCTYPE html>
<html>
<head>
    <title>Análise de Notas dos Alunos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Análise de Notas dos Alunos</h2>
        <form method="post" action="analisar_notas.php">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<div class="form-group">';
                echo '<label for="nomeAluno' . $i . '">Nome do Aluno ' . $i . ':</label>';
                echo '<input type="text" class="form-control" id="nomeAluno' . $i . '" name="nomeAluno' . $i . '" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="nota1Aluno' . $i . '">Nota 1 do Aluno ' . $i . ':</label>';
                echo '<input type="number" step="0.01" class="form-control" id="nota1Aluno' . $i . '" name="nota1Aluno' . $i . '" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="nota2Aluno' . $i . '">Nota 2 do Aluno ' . $i . ':</label>';
                echo '<input type="number" step="0.01" class="form-control" id="nota2Aluno' . $i . '" name="nota2Aluno' . $i . '" required>';
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Analisar Notas</button>
        </form>
    </div>
</body>
</html>
