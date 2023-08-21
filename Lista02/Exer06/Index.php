<!DOCTYPE html>
<html>
<head>
    <title>Ordenar Valores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Ordenar Valores</h2>
        <form method="post" action="ordenar.php">
            <div class="form-group">
                <label for="valorA">Digite o valor A:</label>
                <input type="number" class="form-control" id="valorA" name="valorA" required>
            </div>
            <div class="form-group">
                <label for="valorB">Digite o valor B:</label>
                <input type="number" class="form-control" id="valorB" name="valorB" required>
            </div>
            <button type="submit" class="btn btn-primary">Ordenar Valores</button>
        </form>
    </div>
</body>
</html>
