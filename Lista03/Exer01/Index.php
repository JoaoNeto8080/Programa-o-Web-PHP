<!DOCTYPE html>
<html>
<head>
    <title>Notas dos Alunos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Notas dos Alunos</h2>
        <form method="post" action="processar.php">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<div class="form-group">';
                echo '<label for="nomeAluno' . $i . '">Nome do Aluno ' . $i . ':</label>';
                echo '<input type="text" class="form-control" id="nomeAluno' . $i . '" name="nomeAluno' . $i . '" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="notaAluno' . $i . '">Nota do Aluno ' . $i . ':</label>';
                echo '<input type="number" step="0.01" class="form-control" id="notaAluno' . $i . '" name="notaAluno' . $i . '" required>';
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Calcular Média e Maior Nota</button>
        </form>
    </div>
</body>
</html>
