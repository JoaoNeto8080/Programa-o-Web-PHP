<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Lote de Cheques</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Validação de Lote de Cheques</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="somaLote">Soma do Lote:</label>
                <input type="number" class="form-control" id="somaLote" name="somaLote" required>
            </div>
            <div class="form-group">
                <label for="numCheques">Número de Cheques:</label>
                <input type="number" class="form-control" id="numCheques" name="numCheques" required>
            </div>
            <button type="submit" class="btn btn-primary">Inserir Cheques</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $somaLote = $_POST["somaLote"];
            $numCheques = $_POST["numCheques"];
            $somaCalculada = 0;

            if ($numCheques <= 0) {
                echo '<p class="alert alert-danger mt-3">Número de cheques inválido.</p>';
            } else {
                echo '<h3>Inserir Valores dos Cheques</h3>';
                echo '<form method="post" action="">';

                for ($i = 1; $i <= $numCheques; $i++) {
                    echo '<div class="form-group">';
                    echo "<label for='cheque$i'>Valor do Cheque $i:</label>";
                    echo "<input type='number' class='form-control' id='cheque$i' name='cheque$i' required>";
                    echo '</div>';
                }

                echo '<input type="hidden" name="numCheques" value="' . $numCheques . '">';
                echo '<input type="hidden" name="somaLote" value="' . $somaLote . '">';
                echo '<button type="submit" class="btn btn-primary">Validar Lote</button>';
                echo '</form>';
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cheque1"])) {
            $somaLote = $_POST["somaLote"];
            $numCheques = $_POST["numCheques"];
            $somaCalculada = 0;

            for ($i = 1; $i <= $numCheques; $i++) {
                $valorCheque = $_POST["cheque$i"];
                $somaCalculada += $valorCheque;
            }

            echo '<h3>Resultado da Validação</h3>';

            if ($somaCalculada == $somaLote) {
                echo '<p class="alert alert-success mt-3">LOTE Ok</p>';
            } elseif ($somaCalculada < $somaLote) {
                echo '<p class="alert alert-danger mt-3">Diferença negativa</p>';
            } else {
                echo '<p class="alert alert-danger mt-3">Diferença positiva</p>';
            }
        }
        ?>
    </div>
</body>
</html>

