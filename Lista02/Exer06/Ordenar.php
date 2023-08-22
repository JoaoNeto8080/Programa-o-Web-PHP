<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valorA = $_POST['valorA'];
            $valorB = $_POST['valorB'];

            echo '<p>Valores digitados: ' . $valorA . ' ' . $valorB . '</p>';

            if ($valorA < $valorB) {
                echo '<p>Valores em ordem crescente: ' . $valorA . ' ' . $valorB . '</p>';
            } elseif ($valorB < $valorA) {
                echo '<p>Valores em ordem crescente: ' . $valorB . ' ' . $valorA . '</p>';
            } else {
                echo '<p>Números iguais: ' . $valorA . '</p>';
            }
        }
        ?>
    </div>
</body>
</html>

