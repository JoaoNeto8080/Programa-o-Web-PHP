<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Cálculo Fatorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado do Cálculo Fatorial</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            $fatorial = 1;

            echo "<p>Fatorial de $numero:</p>";
            echo "<p>$numero! = ";
            for ($i = $numero; $i > 0; $i--) {
                $fatorial *= $i;
                if ($i == 1) {
                    echo "1 = $fatorial</p>";
                } else {
                    echo "$i * ";
                }
            }
        }
        ?>
    </div>
</body>
</html>
