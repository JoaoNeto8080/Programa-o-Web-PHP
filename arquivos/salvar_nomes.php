<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    
    // Abra o arquivo em modo de escrita e adicione o nome
    $file = fopen('nomes.txt', 'a');
    fwrite($file, $nome . "\n");
    fclose($file);
}

// Redirecione de volta para a página principal
header('Location: index.html');
?>
