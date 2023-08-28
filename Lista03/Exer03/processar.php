<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Multiplicação</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado da Multiplicação</h2>
        <?php
        $valores = array();

        for ($i = 1; $i <= 10; $i++) {
            $valor = $_POST['valor' . $i];
            $valores[$i] = $valor;
        }

        $multiplicador = $_POST['multiplicador'];

        echo '<p>Valores Originais:</p>';
        echo '<ul>';
        foreach ($valores as $index => $valor) {
            echo "<li>Valor $index: $valor</li>";
        }
        echo '</ul>';

        echo '<p>Multiplicador: ' . $multiplicador . '</p>';

        echo '<p>Valores Multiplicados:</p>';
        echo '<ul>';
        foreach ($valores as $index => $valor) {
            $resultado = $valor * $multiplicador;
            echo "<li>Valor $index: $resultado</li>";
        }
        echo '</ul>';
        ?>
    </div>
</body>
</html>
