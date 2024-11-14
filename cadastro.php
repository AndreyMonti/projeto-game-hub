<?php
include 'conexao.php';

if (isset($_POST['cadastro'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Define o tipo do usuário como "user" por padrão
    $tipo_usuario = "user";

    // Prepara a consulta para inserir o email, senha e tipo de usuário
    $stmt = $connection->prepare("INSERT INTO usuarios (email_usuario, senha_usuario, tipo_usuario) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $senha, $tipo_usuario);
    
    if ($stmt->execute()) {
        // Redireciona para a página de login após o cadastro
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar: " . $connection->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <!-- Caminho correto para o arquivo CSS na mesma pasta -->
    <link rel="stylesheet" href="./cadastro/cadastro.css">
</head>
<body>
    <div class="section">
        <h2>Cadastre-se</h2>
        <form method="POST" action="cadastro.php">
            <div class="input-container">
                <label for="email">E-mail:</label>
                <input type="email"  name="email" required>
            </div>
            <div class="input-container">
                <label for="password">Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <button type="submit" name="cadastro">Cadastrar</button>
        </form>
    </div>
</body>
</html>
