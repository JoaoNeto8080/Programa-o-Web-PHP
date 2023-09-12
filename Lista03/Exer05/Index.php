<!DOCTYPE html>
<html>
<head>
    <title>Números Primos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Números Primos</h2>
        <form method="post" action="calcular_primos.php">
            <?php
            for ($i = 1; $i <= 20; $i++) {
                echo '<div class="form-group">';
                echo '<label for="numero' . $i . '">Número ' . $i . ':</label>';
                echo '<input type="number" class="form-control" id="numero' . $i . '" name="numero' . $i . '" required>';
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Calcular Números Primos</button>
        </form>
    </div>
</body>
</html>
