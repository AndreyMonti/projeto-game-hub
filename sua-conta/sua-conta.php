<?php
session_start();

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    header("Location: ../index.php");
    exit();
}

$usuario_email = $_SESSION['email_sessao'];
$usuario_tipo = $_SESSION['tipo_sessao'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Informações</title>
    <link rel="stylesheet" href="sua-conta.css">
</head>
<body>
    <div class="back-button">
        <a href="./tela-inicial/tela-inicial.php">&#8592;</a>
    </div>
    <div class="form-container">
        <div class="profile-icon"></div>
        <form action="processa_alteracao.php" method="POST">
            <label for="nome">Alterar nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Alterar E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Alterar senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit" class="confirm-button">Confirmar</button>
        </form>
    </div>
</body>
</html>
