<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado da Conversão</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metros = $_POST['metros'];
            $centimetros = $metros * 100;

            echo '<p>' . $metros . ' metros equivalem a ' . $centimetros . ' centímetros.</p>';
        }
        ?>
    </div>
</body>
</html>
