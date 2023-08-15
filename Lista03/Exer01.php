<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <form action="Exer01.php" method="POST">
        <?php for($i=1; $i<=10; $i++){ ?>
        <div class="row">
            <div class="col">
                <label for="aluno<?=$i?>" class="form-label">Infomre o nome do aluno <?=$i?>:</label>
                <input type="text" name="aluno<?=$i?>" id="aluno<?=$i?>" class="form-control"/>
            </div>
            <div class="col">
                <label for="nota<?=$i?>" class="form-label">Informe a nota aluno <?=$i?>:</label>
                <input type="number" name="nota<?=$i?>" id="nota<?=$i?>" class="form-control">
            </div>
        </div>
        <?php } ?>
        <br>
        <div class="row">
            <div class="col">
            <button type="sumit" class="btn btn-warning">Calcular</button>
            </div>
        </div>
    </form>
    <?php
        if ($_POST){
            for($i=1; $i<=10; $i++){
                $vetor[$_POST["aluno$i"]] = $_POST["nota$i"];
            }
            foreach($vetor as $chave => $valor){
                echo "<br> Nome do aluno $chave - Nota: $valor";
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>