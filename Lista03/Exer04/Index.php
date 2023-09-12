<!DOCTYPE html>
<html>
<head>
    <title>Nome do Mês Correspondente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Nome do Mês Correspondente</h2>
        <form method="post" action="descobrir_mes.php">
            <div class="form-group">
                <label for="numero">Digite um número (1 a 12) para descobrir o mês correspondente:</label>
                <input type="number" class="form-control" id="numero" name="numero" min="1" max="12" required>
            </div>
            <button type="submit" class="btn btn-primary">Descobrir</button>
        </form>
    </div>
</body>
</html>
