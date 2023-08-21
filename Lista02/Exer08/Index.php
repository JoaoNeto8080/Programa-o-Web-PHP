<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Tintas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de Tintas</h2>
        <form method="post" action="calculadora.php">
            <div class="form-group">
                <label for="metrosQuadrados">Digite o tamanho da área a ser pintada (em metros quadrados):</label>
                <input type="number" step="0.01" class="form-control" id="metrosQuadrados" name="metrosQuadrados" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>
