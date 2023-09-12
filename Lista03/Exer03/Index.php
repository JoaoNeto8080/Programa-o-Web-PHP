<!DOCTYPE html>
<html>
<head>
    <title>Multiplicação de Valores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Multiplicação de Valores</h2>
        <form method="post" action="processar.php">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<div class="form-group">';
                echo '<label for="valor' . $i . '">Valor ' . $i . ':</label>';
                echo '<input type="number" step="0.01" class="form-control" id="valor' . $i . '" name="valor' . $i . '" required>';
                echo '</div>';
            }
            ?>
            <div class="form-group">
                <label for="multiplicador">Digite um número para multiplicar:</label>
                <input type="number" step="0.01" class="form-control" id="multiplicador" name="multiplicador" required>
            </div>
            <button type="submit" class="btn btn-primary">Multiplicar</button>
        </form>
    </div>
</body>
</html>
