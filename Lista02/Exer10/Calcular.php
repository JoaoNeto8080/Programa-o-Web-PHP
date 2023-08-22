<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Cálculo do IMC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado do Cálculo do IMC</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            
            $imc = $peso / ($altura * $altura);
            $imc = round($imc, 2); // Arredondar o IMC para 2 casas decimais
            
            echo "<p>Seu IMC é: $imc</p>";
            
            if ($imc < 18.5) {
                echo "<p>Você está abaixo do peso. Consulte mais sobre o IMC <a href='https://www.minhavida.com.br/saude/temas/imc' target='_blank'>aqui</a>.</p>";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<p>Seu peso está dentro da faixa considerada normal. Consulte mais sobre o IMC <a href='https://www.minhavida.com.br/saude/temas/imc' target='_blank'>aqui</a>.</p>";
            } elseif ($imc >= 25 && $imc < 29.9) {
                echo "<p>Você está acima do peso. Consulte mais sobre o IMC <a href='https://www.minhavida.com.br/saude/temas/imc' target='_blank'>aqui</a>.</p>";
            } else {
                echo "<p>Você está com obesidade. Consulte mais sobre o IMC <a href='https://www.minhavida.com.br/saude/temas/imc' target='_blank'>aqui</a>.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
