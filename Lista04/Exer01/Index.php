<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Verificação de Data</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="data">Digite a data (DD/MM/AAAA):</label>
                <input type="text" class="form-control" id="data" name="data" placeholder="DD/MM/AAAA" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar Data</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST["data"];
            $timestamp = strtotime($data);

            if ($timestamp === false) {
                echo '<div class="alert alert-danger mt-3">Data inválida.</div>';
            } else {
                $diaDaSemana = date("l", $timestamp);
                echo '<div class="alert alert-success mt-3">Data válida. O dia da semana é ' . $diaDaSemana . '.</div>';
            }
        }
        ?>
    </div>
</body>
</html>
