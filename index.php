<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email_digital = $_POST['email'];
    $senha_digital = $_POST['senha'];

    $email_digital = mysqli_real_escape_string($connection, $email_digital);
    $senha_digital = mysqli_real_escape_string($connection, $senha_digital);

    $query = "SELECT * FROM usuarios WHERE email_usuario = '$email_digital' AND senha_usuario = '$senha_digital'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $usuario_logado = mysqli_fetch_assoc($result);

        $_SESSION['email_sessao'] = $usuario_logado['email_usuario'];
        $_SESSION['tipo_sessao'] = $usuario_logado['tipo_usuario'];
        
        header("Location: ./tela-inicial/tela-inicial.php");
        exit();
    } else {
        $_SESSION['login_erro'] = "Email ou senha incorretos";
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GameHub</title>
    <link rel="stylesheet" href="./login/login.css">
    <script src="../projeto-game-hub/login/login.js" defer></script>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-form">
                <form method="POST" action="index.php" >
                    <h2>GameHub Email</h2>
                    <input type="email" placeholder="Coloque seu email abc@exemplo.com" name="email" id="emailUsu" required>
                    <h2>GameHub Senha</h2>
                    <input type="password" placeholder="Coloque sua senha" name="senha" id="senhaUsu" required>
                    <button type="submit" class="login-button">Entrar</button>
                </form>
                <a href="cadastro.php">Cadastre-se</a>
            </div>
            <div class="login-image">
                <img src="./imagens/imagem_controle_login.jpg" alt="Imagem de jogo">
            </div>
        </div>
    </div>
</body>
</html>
