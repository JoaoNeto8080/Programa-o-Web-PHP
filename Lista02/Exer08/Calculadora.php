<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Calculadora de Tintas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado da Calculadora de Tintas</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metrosQuadrados = $_POST['metrosQuadrados'];
            $litrosTinta = $metrosQuadrados / 3;
            $latasTinta = ceil($litrosTinta / 18);
            $precoTotal = $latasTinta * 80;

            echo '<p>Área a ser pintada: ' . $metrosQuadrados . ' metros quadrados.</p>';
            echo '<p>Quantidade de latas de tinta necessárias: ' . $latasTinta . '</p>';
            echo '<p>Preço total: R$ ' . $precoTotal . '</p>';
        }
        ?>
    </div>
</body>
</html>
