<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de IMC</h2>
        <form method="post" action="calcular.php">
            <div class="form-group">
                <label for="peso">Digite seu peso (kg):</label>
                <input type="number" step="0.01" class="form-control" id="peso" name="peso" required>
            </div>
            <div class="form-group">
                <label for="altura">Digite sua altura (metros):</label>
                <input type="number" step="0.01" class="form-control" id="altura" name="altura" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular IMC</button>
        </form>
    </div>
</body>
</html>
