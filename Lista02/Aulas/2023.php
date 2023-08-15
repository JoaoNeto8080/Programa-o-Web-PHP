<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php  

    ?>
    Olá, hoje é <?php echo date("d"); ?> de agosto de <?=date("d/m/Y")?>
   <?php $hora = date("H:i");
        echo  "Hora:".$hora;
   ?>
   <form method="POST" action="bemvindo.php">
       <div class="col-3">
           <div class="row">
           <div class="row">
               <label for="nome" class="form-label">
                   Informe seu nome:
                </label>
                <input class="form-control" id="nome" name="nome" type="text">
               <label for="valor1" class="form-label">
                   Informe o Primeiro numero?
                </label>
                <input class="form-control" id="valor1" name="valor1" type="text">
                <label for="valor2" class="form-label">
                   Informe o Segundo numero?
                </label>
                <input class="form-control" id="valor2" name="valor2" type="text">
                <button class="btn btn-primary" type="submit">
                    Enviar
                </button>
           </div>
       </div>
   </form>
</body>
</html>