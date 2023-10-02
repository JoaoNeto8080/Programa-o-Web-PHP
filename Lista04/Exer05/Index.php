<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Cálculo do IMC</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="altura">Digite a altura (em metros):</label>
                <input type="number" step="0.01" class="form-control" id="altura" name="altura" min="0" required>
            </div>
            <div class="form-group">
                <label for="peso">Digite o peso (em quilogramas):</label>
                <input type="number" step="0.01" class="form-control" id="peso" name="peso" min="0" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular IMC</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];

            // Função para calcular o IMC
            function calcularIMC($altura, $peso) {
                return $peso / ($altura * $altura);
            }

            $imc = calcularIMC($altura, $peso);

            echo '<h3>Seu IMC é: ' . number_format($imc, 2) . '</h3>';

            if ($imc < 18.5) {
                echo '<p class="alert alert-warning">Classificação: Abaixo do peso</p>';
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo '<p class="alert alert-success">Classificação: Peso normal</p>';
            } elseif ($imc >= 25 && $imc < 29.9) {
                echo '<p class="alert alert-warning">Classificação: Sobrepeso</p>';
            } elseif ($imc >= 30 && $imc < 34.9) {
                echo '<p class="alert alert-danger">Classificação: Obesidade Grau I</p>';
            } elseif ($imc >= 35 && $imc < 39.9) {
                echo '<p class="alert alert-danger">Classificação: Obesidade Grau II</p>';
            } else {
                echo '<p class="alert alert-danger">Classificação: Obesidade Grau III</p>';
            }
        }
        ?>
    </div>
</body>
</html>
