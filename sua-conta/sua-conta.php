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
            <form action="#" method="POST">
                <label for="name">Alterar nome:</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome">
                
                <label for="email">Alterar E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email">
                
                <label for="password">Alterar senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha">
                
                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>
</html>
