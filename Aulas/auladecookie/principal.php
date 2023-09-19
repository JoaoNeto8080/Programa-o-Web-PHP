<?php
    session_start();
    if((isset($_SESSION['acesso'])) &&($_SESSION['acesso']==true)){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form>
    <a href="sair.php">Sair</a>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="confirma_senha">Confirme a Senha:</label>
        <input type="password" id="confirma_senha" name="confirma_senha" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="sexo">Sexo:</label>
        <input type="radio" id="sexo_masculino" name="sexo" value="Masculino"> Masculino
        <input type="radio" id="sexo_feminino" name="sexo" value="Feminino"> Feminino
        <input type="radio" id="sexo_outro" name="sexo" value="Outro"> Outro<br><br>

        <label for="interesses">Interesses:</label>
        <input type="checkbox" id="interesse_esportes" name="interesses" value="Esportes"> Esportes
        <input type="checkbox" id="interesse_tecnologia" name="interesses" value="Tecnologia"> Tecnologia
        <input type="checkbox" id="interesse_cinema" name="interesses" value="Cinema"> Cinema
        <input type="checkbox" id="interesse_viagens" name="interesses" value="Viagens"> Viagens<br><br>

        <label for="bio">Biografia:</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
<?php 
    } else {
      header('Location: index.php?acesso=negado');
    }