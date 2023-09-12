<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Análise de Notas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado da Análise de Notas</h2>
        <?php
        $alunos = array();

        for ($i = 1; $i <= 10; $i++) {
            $nomeAluno = $_POST['nomeAluno' . $i];
            $nota1Aluno = $_POST['nota1Aluno' . $i];
            $nota2Aluno = $_POST['nota2Aluno' . $i];
            $mediaAluno = ($nota1Aluno + $nota2Aluno) / 2;
            $alunos[$nomeAluno] = array("nota1" => $nota1Aluno, "nota2" => $nota2Aluno, "media" => $mediaAluno);
        }

        echo '<h3>Aprovados:</h3>';
        echo '<ul>';
        foreach ($alunos as $nome => $dados) {
            if ($dados["media"] >= 7) {
                echo "<li>$nome - Média: " . round($dados["media"], 2) . "</li>";
            }
        }
        echo '</ul>';

        echo '<h3>Reprovados:</h3>';
        echo '<ul>';
        foreach ($alunos as $nome => $dados) {
            if ($dados["media"] < 7) {
                echo "<li>$nome</li>";
            }
        }
        echo '</ul>';
        ?>
    </div>
</body>
</html>
