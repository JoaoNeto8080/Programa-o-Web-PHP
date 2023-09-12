<!DOCTYPE html>
<html>
<head>
    <title>Análise de Números</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Análise de Números</h2>
        <form method="post" action="processar.php">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<div class="form-group">';
                echo '<label for="numero' . $i . '">Número ' . $i . ':</label>';
                echo '<input type="number" class="form-control" id="numero' . $i . '" name="numero' . $i . '" required>';
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Analisar Números</button>
        </form>
    </div>
</body>
</html>
