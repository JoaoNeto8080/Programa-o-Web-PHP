<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Cliente</h2>
        <form method="post" action="Dados.php" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Gênero:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="generoM" name="genero" value="Masculino" required>
                        <label class="form-check-label" for="generoM">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="generoF" name="genero" value="Feminino" required>
                        <label class="form-check-label" for="generoF">Feminino</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="estadoCivil">Estado Civil:</label>
                    <select class="form-control" id="estadoCivil" name="estadoCivil" required>
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado">Casado</option>
                        <option value="Divorciado">Divorciado</option>
                        <option value="Viúvo">Viúvo</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="rendaMensal">Renda Mensal:</label>
                    <input type="text" class="form-control" id="rendaMensal" name="rendaMensal" required>
                </div>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <textarea class="form-control" id="endereco" name="endereco" rows="2" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="numero">Número:</label>
                    <input type="text" class="form-control" id="numero" name="numero" required>
                </div>
            </div>
            <div class="form-group">
                <label for="complemento">Complemento:</label>
                <input type="text" class="form-control" id="complemento" name="complemento">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="estado">Estado:</label>
                    <input type="text" class="form-control" id="estado" name="estado" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" required>
                </div>
            </div>
            <div class="form-group">
                <label for="fotoPerfil">Foto de Perfil:</label>
                <input type="file" class="form-control-file" id="fotoPerfil" name="fotoPerfil" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>         
</body>