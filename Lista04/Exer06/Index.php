<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Perfeito</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Verificar Número Perfeito</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="numero">Digite um número inteiro:</label>
                <input type="number" class="form-control" id="numero" name="numero" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar Número</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

            // Função para verificar se um número é perfeito
            function isPerfectNumber($num) {
                if ($num <= 0) {
                    return false;
                }

                $somaFatores = 0;
                for ($i = 1; $i <= $num / 2; $i++) {
                    if ($num % $i === 0) {
                        $somaFatores += $i;
                    }
                }

                return $somaFatores === $num;
            }

            if (isPerfectNumber($numero)) {
                echo '<p class="alert alert-success mt-3">' . $numero . ' é um número perfeito.</p>';
            } else {
                echo '<p class="alert alert-danger mt-3">' . $numero . ' não é um número perfeito.</p>';
            }
        }
        ?>
    </div>
</body>
</html>
