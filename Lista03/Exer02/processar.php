<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Análise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado da Análise</h2>
        <?php
        $numeros = array();

        for ($i = 1; $i <= 10; $i++) {
            $numero = $_POST['numero' . $i];
            $numeros[] = $numero;
        }

        $negativos = 0;
        $positivos = 0;
        $pares = 0;
        $impares = 0;

        foreach ($numeros as $numero) {
            if ($numero < 0) {
                $negativos++;
            } elseif ($numero > 0) {
                $positivos++;
            }

            if ($numero % 2 == 0) {
                $pares++;
            } else {
                $impares++;
            }
        }

        echo '<p>Números Negativos: ' . $negativos . '</p>';
        echo '<p>Números Positivos: ' . $positivos . '</p>';
        echo '<p>Números Pares: ' . $pares . '</p>';
        echo '<p>Números Ímpares: ' . $impares . '</p>';
        ?>
    </div>
</body>
</html>
