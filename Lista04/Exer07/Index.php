<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Hora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Conversor de Hora</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="hora">Digite a hora (0-23):</label>
                <input type="number" class="form-control" id="hora" name="hora" min="0" max="23" required>
            </div>
            <div class="form-group">
                <label for="minutos">Digite os minutos (0-59):</label>
                <input type="number" class="form-control" id="minutos" name="minutos" min="0" max="59" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hora = $_POST["hora"];
            $minutos = $_POST["minutos"];

            // Função para converter a hora de 24 horas para 12 horas
            function converterPara12Horas($hora, $minutos) {
                $periodo = 'A.M.';
                if ($hora >= 12) {
                    $periodo = 'P.M.';
                }
                if ($hora == 0) {
                    $hora = 12;
                } elseif ($hora > 12) {
                    $hora -= 12;
                }
                return "$hora:$minutos $periodo";
            }

            $horaConvertida = converterPara12Horas($hora, $minutos);

            echo '<p class="mt-3">A hora convertida é: ' . $horaConvertida . '</p>';
        }
        ?>
    </div>
</body>
</html>
