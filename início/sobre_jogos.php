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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="../início/sobre_jogos.css">
    <script src="sobre_jogos.js"></script>
</head>
<body>
    <header>
        <a href="../tela-inicial/tela-inicial.php">
            <img src="../imagens/Icone_Controle.png" alt="Ícone" class="logo">
        </a>
        <div class="search-bar">
            <input type="text" placeholder="O que deseja descobrir?">
        </div>
        <button class="menu-toggle" id="menu-toggle">☰</button>
        <nav id="navigation_header">
            <ul>
                <li><a href="#">Curiosidades</a></li>
                <li><a href="../lancamento/lancamentos.php">Eventos</a></li>
                <li><a href="../canais_streaming/streaming.php">Transmissões</a></li>
                <li><a href="../sua-conta/sua-conta.php">Sua conta</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-text">
            <h1>GAMEHUB: SEU PORTAL PARA O MUNDO DOS JOGOS!</h1>
            <p>Estamos comprometidos em oferecer uma experiência informativa de excelência. Tratamos de uma ampla gama de tópicos, desde os eventos mais recentes até transmissões ao vivo, curiosidades intrigantes e análises de dados aprofundadas.</p>
            <p>Nossa prioridade é garantir que cada informação seja apresentada com a mais alta qualidade e precisão, sempre priorizando a confiabilidade para que você possa confiar plenamente em nossas atualizações. Seja para se manter informado sobre as últimas tendências, explorar novas curiosidades ou compreender os dados de forma clara e acessível, estamos aqui para entregar o conteúdo que você precisa, de maneira precisa e confiável.</p>
            <div class="info-sections">
                <div class="info">
                    <h2>MISSÃO</h2>
                    <p>Ser a fonte mais confiável e abrangente de informações sobre o mundo dos jogos, conectando jogadores, desenvolvedores e entusiastas através de conteúdo de qualidade, análises imparciais e cobertura de eventos. Estamos comprometidos em proporcionar a melhor experiência informativa para ajudar nossa comunidade.</p>
                </div>
                <div class="info">
                    <h2>VALORES</h2>
                    <ul>
                        <li>Honestidade</li>
                        <li>Transparência</li>
                        <li>Comunidade conectada/envolvida</li>
                        <li>Novas Tecnologias</li>
                        <li>Fácil acesso às informações</li>
                        <li>Inclusividade e Diversidade</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
