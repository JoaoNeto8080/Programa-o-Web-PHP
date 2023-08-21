<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Tabuada</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            echo "<h3>Tabuada do $numero:</h3>";
            echo '<div class="row">';
            for ($i = 0; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo '<div class="col-md-3">';
                echo "<p>$numero X $i = $resultado</p>";
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
