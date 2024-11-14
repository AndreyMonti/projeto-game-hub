<?php
include 'conexao.php';

if (isset($_POST['cadastro'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografar a senha com MD5
    $senha_criptografada = md5($senha);

    // Define o tipo do usuário como "user" por padrão
    $tipo_usuario = "user";

    // Prepara a consulta para inserir o email, senha criptografada e tipo de usuário
    $stmt = $connection->prepare("INSERT INTO usuarios (email_usuario, senha_usuario, tipo_usuario) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $senha_criptografada, $tipo_usuario);
    
    if ($stmt->execute()) {
        // Redireciona para a página de login após o cadastro
        header("Location: index.php");
        exit();  // Garante que o script pare após o redirecionamento
    } else {
        echo "Erro ao cadastrar: " . $connection->error;
    }

    $stmt->close();
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
