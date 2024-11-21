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
    <title>GameHub - Página Inicial</title>
    <link rel="stylesheet" href="./style.css">
    <script src="tela-inicial.js" defer></script>
</head>
<body>
    <header>
        <a href="tela-inicial.php">
            <img src="../imagens/Icone_Controle.png" alt="Ícone" class="logo">
        </a>
        <div class="search-bar">
            <input type="text" placeholder="O que deseja descobrir?">
        </div>
        <button class="menu-toggle" id="menu-toggle">☰</button>
        <nav id="navigation_header">
            <ul>
                <li><a href="../curiosidades/curiosidades.html">Curiosidades</a></li>
                <li><a href="../lancamento/lancamentos.php">Eventos</a></li>
                <li><a href="../canais_streaming/streaming.php">Transmissões</a></li>
                <li><a href="../sua-conta/sua-conta.php">Sua conta</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="hero">
            <div class="overlay"></div>
            <div class="content">
                <h1>GameHub</h1>
                <p>Seu portal para o mundo dos jogos!</p>
                <button><a href="../início/sobre_jogos.php">Saiba mais</a></button>
            </div>
        </div>
    </main>
    <aside id="sidebar">
        <button class="close-sidebar" id="close-sidebar">×</button>
        <ul>
            <li><a href="#">Curiosidades</a></li>
            <li><a href="../lancamento/lancamentos.html">Eventos</a></li>
            <li><a href="../canais_streaming/streaming.html">Transmissões</a></li>
            <li><a href="#">Sua conta</a></li>
        </ul>
    </aside>
</body>
</html>
