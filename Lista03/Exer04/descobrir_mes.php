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
        $meses = array(
            1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
            5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
            9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            if ($numero >= 1 && $numero <= 12) {
                echo '<p>O mês correspondente ao número ' . $numero . ' é: ' . $meses[$numero] . '</p>';
            } else {
                echo '<p>Número inválido. Digite um número entre 1 e 12.</p>';
            }
        }
        ?>
    </div>
</body>
</html>
