<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de Soma</h2>
        <form method="post" action="resultado.php">
            <div class="form-group">
                <label for="valor1">Valor 1:</label>
                <input type="number" class="form-control" id="valor1" name="valor1" required>
            </div>
            <div class="form-group">
                <label for="valor2">Valor 2:</label>
                <input type="number" class="form-control" id="valor2" name="valor2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>
