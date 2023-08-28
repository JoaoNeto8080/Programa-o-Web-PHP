<!DOCTYPE html>
<html>
<head>
    <title>Análise de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Análise de Produtos</h2>
        <form method="post" action="analisar_produtos.php">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo '<div class="form-group">';
                echo '<label for="nomeProduto' . $i . '">Nome do Produto ' . $i . ':</label>';
                echo '<input type="text" class="form-control" id="nomeProduto' . $i . '" name="nomeProduto' . $i . '" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="precoProduto' . $i . '">Preço do Produto ' . $i . ':</label>';
                echo '<input type="number" step="0.01" class="form-control" id="precoProduto' . $i . '" name="precoProduto' . $i . '" required>';
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Analisar Produtos</button>
        </form>
    </div>
</body>
</html>
