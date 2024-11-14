<?php
session_start();
include '../conexao.php';

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    header("Location: ../index.php");
    exit();
}

$usuario_email = $_SESSION['email_sessao'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $novo_nome = $_POST['name'];
    $novo_email = $_POST['email'];
    $nova_senha = $_POST['password'];

    $stmt = $connection->prepare("UPDATE usuarios SET nome_usuario = ?, email_usuario = ?, senha_usuario = ? WHERE email_usuario = ?");
    $stmt->bind_param("ssss", $novo_nome, $novo_email, $nova_senha, $usuario_email);
    
    if ($stmt->execute()) {
        $_SESSION['email_sessao'] = $novo_email;
        
        header("Location: ../tela-inicial/tela-inicial.php");
        exit();
    } else {
        echo "Erro ao atualizar os dados: " . $connection->error;
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Dados</title>
    <link rel="stylesheet" href="sua-conta.css">
</head>
<body>
    <div class="back-arrow">
        <a href="../tela-inicial/tela-inicial.php">&#8592;</a>
    </div>
    <div class="container">
        <div class="top-bar"></div>
        <div class="form-container">
            <div class="avatar"></div>
            <form action="sua-conta.php" method="POST">
                <label for="name">Alterar nome:</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                
                <label for="email">Alterar E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                
                <label for="password">Alterar senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                
                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>
</html>
