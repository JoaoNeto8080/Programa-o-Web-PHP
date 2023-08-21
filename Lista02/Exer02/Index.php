<!DOCTYPE html>
<html>
<head>
    
    <title>Encontre o Menor Valor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Encontre o Menor Valor</h2>
        <form method="post" action="resultado.php">
            <?php
            for ($i = 1; $i <= 7; $i++) {
                echo '<div class="form-group">';
                echo '<label for="numero' . $i . '">Número ' . $i . ':</label>';
                echo '<input type="number" class="form-control" id="numero' . $i . '" name="numeros[]" required>';
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Encontrar</button>
        </form>
    </div>
</body>
</html>
