<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    $vetor = [
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3,
        4 => 4
    ];
    var_dump($vetor);
    echo "<br>";
    echo "O valor da posição [valor1] é {$vetor["valor1"]}";
    $vetor["valor2"] = 25;
    echo "<br>";
    echo "O valor da posição [valor2] agora é ".$vetor["valor2"];
    $vetor[5] = 30;
    echo "Posição 5: ".$vetor[5]; 
    unset($vetor[5]);
    //unset($vetor);
    foreach($vetor as $posicao){
        echo "<br> Valores do vetor: $posicao";

    }
    foreach($vetor as $chave => $valor){
        echo "<br> Posição $chave tem o valor $valor";
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>