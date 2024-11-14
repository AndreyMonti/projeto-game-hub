<?php
session_start();

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Canais de Streaming</title>
        <link rel="stylesheet" href="streaming.css">
        <script src="streaming.js" defer></script>
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
    <main>
        <section class="platforms">
            <div class="container">
                <div style="cursor: pointer;" onclick="window.open('https://www.twitch.tv/', '_blank');" class="carousel-item">
                    <a href="https://www.twitch.tv/">
                        <img src="../imagens/logo_twitch.png" alt="Youtube logo">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Twitch</h5>
                      <p>Twitch é uma plataforma de streaming ao vivo, especialmente popular entre gamers. Twitch também abriga transmissões de eventos de eSports, música, arte e outras formas de entretenimento ao vivo. Os usuários podem interagir com os streamers através de chats ao vivo, criando uma comunidade envolvente e dinâmica.</p>
                    </div>
                </div>
                <div style="cursor: pointer;" onclick="window.open('https://www.gosugamers.net/', '_blank');" class="carousel-item">
                    <a href="https://www.gosugamers.net/">
                        <img src="../imagens/gosugamers.jpg" alt="GosuGames logo">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>GosuGamers</h5>
                      <p>GosuGamers é uma comunidade de jogos com mais de 20 anos de existência, dedicada à criação e compartilhamento de conteúdo de alta qualidade sobre videogames. O site oferece notícias, análises, guias e recursos para jogadores, atraindo mais de 3 milhões de visitantes mensais.</p>
                    </div>
                </div>
                <div style="cursor: pointer;" onclick="window.open('https://www.youtube.com/gaming', '_blank');" class="carousel-item">
                    <a href="https://www.youtube.com/gaming">
                        <img src="../imagens/logo_youtube.jpg" alt="Youtube logo">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Youtube Gaming</h5>
                      <p>YouTube Gaming é uma seção do YouTube dedicada a jogos e conteúdo relacionado. Lançado para fornecer uma experiência de visualização melhor para os gamers, permite que os usuários assistam a gameplays, transmissões ao vivo, trailers e vídeos sobre jogos. O YouTube Gaming também oferece recursos de interação, como chats ao vivo e comentários.</p>
                    </div>
                </div>
                <div style="cursor: pointer;" onclick="window.open('https://www.facebook.com/gaming/video/', '_blank');" class="carousel-item">
                    <a href="https://www.facebook.com/gaming/video/">
                        <img src="../imagens/facebook_gaming_logo.jpg" alt="Facebook logo">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Facebook Gaming</h5>
                      <p>Facebook Gaming é uma plataforma de streaming de jogos integrada à rede social Facebook, permitindo que criadores compartilhem transmissões ao vivo e vídeos. A plataforma facilita a interação entre usuários e streamers, promovendo comunidades em torno de jogos.</p>
                    </div>
                </div>
                <div class="carousel-controls">
                    <button class="prev">&lt;</button>
                    <button class="next">&gt;</button>
                </div>
        </section> 
        <section class="call-to-action">
            <div class="container">
                <p>Entre em contato para anunciar eventos em sua cidade!</p>
                <button>Anuncie aqui!</button>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 - Todos os direitos reservados</p>
        </div>
    </footer>
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