<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Divisores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Soma de Divisores</h2>
        <form method="post" action="">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo '<div class="form-group">';
                echo '<label for="numero' . $i . '">Digite o ' . $i . 'º número inteiro positivo:</label>';
                echo '<input type="number" class="form-control" id="numero' . $i . '" name="numeros[]" min="1" required>';
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Calcular Soma de Divisores</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numeros = $_POST["numeros"];

            // Função para calcular a soma de divisores (exceto ele mesmo)
            function somaDivisores($numero) {
                $soma = 0;
                for ($i = 1; $i < $numero; $i++) {
                    if ($numero % $i === 0) {
                        $soma += $i;
                    }
                }
                return $soma;
            }

            echo '<h3>Soma dos divisores (exceto ele mesmo):</h3>';
            echo '<ul>';
            foreach ($numeros as $numero) {
                $soma = somaDivisores($numero);
                echo '<li>Divisores de ' . $numero . ': ' . $soma . '</li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
</body>
</html>
