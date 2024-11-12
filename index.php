<?php
include'conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $stmt = $connection->prepare("SELECT * FROM usuarios WHERE email_usuario = ? AND senha_usuario = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        $_SESSION['usuario'] = $user['tipo'];
        header("Location: ./início/sobre_jogos.html");
    } else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
                window.onload = function() {
                Swal.fire({
                    icon: 'error',
                    title: 'E-mail ou senha inválidos!',
                    text: 'Tente novamente!',
                });
                }
            </script>";
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
                <form action="./tela-inicial/tela-inicial.html">
                    <h2>GameHub Email</h2>
                    <input type="email" placeholder="Coloque seu email abc@exemplo.com" name='email' id="emailUsu" required>
                    <h2>GameHub Senha</h2>
                    <input type="password" placeholder="Coloque sua senha" name='senha' id="senhaUsu" required>
                    <a href="esqueceu_senha.html" class="forgot-password">Esqueceu sua senha?</a>
                    <button type="submit" class="login-button" onclick="login()">Entrar</button>
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