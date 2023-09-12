<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado</h2>
        <?php
        $alunos = array();

        for ($i = 1; $i <= 10; $i++) {
            $nomeAluno = $_POST['nomeAluno' . $i];
            $notaAluno = $_POST['notaAluno' . $i];
            $alunos[$nomeAluno] = $notaAluno;
        }

        $media = array_sum($alunos) / count($alunos);
        $alunoMaiorNota = array_search(max($alunos), $alunos);

        echo '<p>Média de Notas da Classe: ' . round($media, 2) . '</p>';
        echo '<p>Aluno com Maior Nota: ' . $alunoMaiorNota . ' - Nota: ' . $alunos[$alunoMaiorNota] . '</p>';
        ?>
    </div>
</body>
</html>
