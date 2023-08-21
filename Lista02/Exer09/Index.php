<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de Idade</h2>
        <form method="post" action="calcular.php">
            <div class="form-group">
                <label for="anoNascimento">Digite o ano de nascimento:</label>
                <input type="number" class="form-control" id="anoNascimento" name="anoNascimento" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>
