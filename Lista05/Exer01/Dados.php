<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["dataNascimento"];
    $genero = $_POST["genero"];
    $estadoCivil = $_POST["estadoCivil"];
    $rendaMensal = $_POST["rendaMensal"];
    $endereco = $_POST["endereco"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];

    // Diretório para salvar os dados do cliente
    $clienteDir = __DIR__ . '/' . $cpf;

    // Crie o diretório se ele não existir
    if (!is_dir($clienteDir)) {
        mkdir($clienteDir);
    }

    // Caminho para o arquivo de texto com os dados do cliente
    $dadosClienteFile = $clienteDir . '/' . $cpf . '.txt';

    // Salve os dados do cliente em um arquivo de texto
    $dadosCliente = "CPF: $cpf\nNome: $nome\nData de Nascimento: $dataNascimento\nGênero: $genero\nEstado Civil: $estadoCivil\nRenda Mensal: $rendaMensal\nEndereço: $endereco\nLogradouro: $logradouro\nNúmero: $numero\nComplemento: $complemento\nEstado: $estado\nCidade: $cidade";
    file_put_contents($dadosClienteFile, $dadosCliente);

    // Caminho para salvar a foto de perfil
    $fotoPerfilDir = $clienteDir . '/foto_perfil';

    // Crie o diretório para a foto se ele não existir
    if (!is_dir($fotoPerfilDir)) {
        mkdir($fotoPerfilDir);
    }

    // Verifique se um arquivo de imagem foi enviado
    if (isset($_FILES['fotoPerfil'])) {
        $fotoPerfilFile = $fotoPerfilDir . '/' . $_FILES['fotoPerfil']['name'];
        move_uploaded_file($_FILES['fotoPerfil']['tmp_name'], $fotoPerfilFile);
    }

    echo '<div class="container mt-5">';
    echo '<h2>Cadastro realizado com sucesso!</h2>';
    echo '<p>Os dados do cliente foram salvos.</p>';
    echo '</div>';
}
?>
