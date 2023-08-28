<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Análise de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado da Análise de Produtos</h2>
        <?php
        $produtos = array();

        for ($i = 1; $i <= 5; $i++) {
            $nomeProduto = $_POST['nomeProduto' . $i];
            $precoProduto = $_POST['precoProduto' . $i];
            $produtos[] = array("nome" => $nomeProduto, "preco" => $precoProduto);
        }

        $produtosInferiores50 = 0;
        $produtosEntre50e100 = array();
        $totalPrecosSuperior100 = 0;
        $contagemPrecosSuperior100 = 0;

        foreach ($produtos as $produto) {
            if ($produto["preco"] < 50) {
                $produtosInferiores50++;
            } elseif ($produto["preco"] >= 50 && $produto["preco"] <= 100) {
                $produtosEntre50e100[] = $produto["nome"];
            } else {
                $totalPrecosSuperior100 += $produto["preco"];
                $contagemPrecosSuperior100++;
            }
        }

        $mediaPrecosSuperior100 = $totalPrecosSuperior100 / $contagemPrecosSuperior100;

        echo '<p>Quantidade de produtos com preço inferior a R$50,00: ' . $produtosInferiores50 . '</p>';
        echo '<p>Nomes dos produtos com preço entre R$50,00 e R$100,00:</p>';
        echo '<ul>';
        foreach ($produtosEntre50e100 as $produtoEntre50e100) {
            echo "<li>$produtoEntre50e100</li>";
        }
        echo '</ul>';
        echo '<p>Média dos preços dos produtos com preço superior a R$100,00: R$' . round($mediaPrecosSuperior100, 2) . '</p>';
        ?>
    </div>
</body>
</html>
