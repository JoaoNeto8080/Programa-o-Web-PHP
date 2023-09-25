<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempos de Voltas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de Tempos de Voltas</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="numVoltas">Número de Voltas:</label>
                <input type="number" class="form-control" id="numVoltas" name="numVoltas" min="1" required>
            </div>
            <div class="form-group">
                <label for="tempos">Tempos das Voltas (separados por vírgula):</label>
                <input type="text" class="form-control" id="tempos" name="tempos" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numVoltas = $_POST["numVoltas"];
            $tempos = $_POST["tempos"];

            // Converter a string de tempos em um array
            $temposArray = explode(",", $tempos);

            // Verificar se o número de voltas inserido corresponde ao número de tempos informados
            if (count($temposArray) != $numVoltas) {
                echo '<p class="alert alert-danger mt-3">O número de voltas não corresponde ao número de tempos informados.</p>';
            } else {
                // Calcular o melhor tempo
                $melhorTempo = min($temposArray);

                // Encontrar a volta em que o melhor tempo ocorreu
                $voltaMelhorTempo = array_search($melhorTempo, $temposArray) + 1;

                // Calcular o tempo médio
                $tempoMedio = array_sum($temposArray) / $numVoltas;

                echo '<p class="mt-3">Melhor Tempo: ' . $melhorTempo . '</p>';
                echo '<p>Volta do Melhor Tempo: ' . $voltaMelhorTempo . '</p>';
                echo '<p>Tempo Médio das Voltas: ' . number_format($tempoMedio, 2) . '</p>';
            }
        }
        ?>
    </div>
</body>
</html>
