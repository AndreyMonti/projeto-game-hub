<?php
include 'conexao.php';

if (isset($_POST['cadastro'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $stmt = $connection->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $senha);
    
    if ($stmt->execute()) {
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
