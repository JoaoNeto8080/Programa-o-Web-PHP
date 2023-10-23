<?php
  require '../src/View/cabecalho.php';
  ?>
<?php
session_start();
if(isset($_SESSION['gravar'])){
    if($_SESSION['gravar'])
    echo "Regristro gravado com sucesso!";
    else
    echo "Erro";
    unset($_SESSION['gravar']);
}
?>
<?php
  require '../src/View/rodape.php';