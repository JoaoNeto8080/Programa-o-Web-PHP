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
        $numeros = $_POST['numeros'];
        $menorValor = min($numeros);
        $posicaoMenorValor = array_search($menorValor, $numeros);

        echo '<p>O menor valor é: ' . $menorValor . '</p>';
        echo '<p>A posição do menor valor na sequência de entrada é: ' . ($posicaoMenorValor + 1) . '</p>';
        ?>
    </div>
</body>
</html>
