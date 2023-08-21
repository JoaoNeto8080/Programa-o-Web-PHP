<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado do Cálculo</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $anoNascimento = $_POST['anoNascimento'];
            $anoAtual = date("Y");
            $idade = $anoAtual - $anoNascimento;
            $diasVividos = $idade * 365;
            $idade2025 = 2025 - $anoNascimento;

            echo "<p>Idade: $idade anos</p>";
            echo "<p>Dias vividos: $diasVividos dias</p>";
            echo "<p>Idade em 2025: $idade2025 anos</p>";
        }
        ?>
    </div>
</body>
</html>
