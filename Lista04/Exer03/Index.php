<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Número entre Dois</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Menor Número entre Dois</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="numero1">Digite o primeiro número inteiro:</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <div class="form-group">
                <label for="numero2">Digite o segundo número inteiro:</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <button type="submit" class="btn btn-primary">Encontrar o Menor Número</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];

            // Função para encontrar o menor número
            function encontrarMenor($num1, $num2) {
                return ($num1 < $num2) ? $num1 : $num2;
            }

            $menorNumero = encontrarMenor($numero1, $numero2);

            echo '<h3>O menor número entre ' . $numero1 . ' e ' . $numero2 . ' é: ' . $menorNumero . '</h3>';
        }
        ?>
    </div>
</body>
</html>
