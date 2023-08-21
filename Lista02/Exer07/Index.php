<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Metros para Centímetros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Conversor de Metros para Centímetros</h2>
        <form method="post" action="conversor.php">
            <div class="form-group">
                <label for="metros">Digite o valor em metros:</label>
                <input type="number" step="0.01" class="form-control" id="metros" name="metros" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>
    </div>
</body>
</html>
