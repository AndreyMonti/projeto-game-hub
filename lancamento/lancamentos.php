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
        <title>Eventos</title>
        <link rel="stylesheet" href="lancamento.css">
        <script src="lancamento.js" defer></script>
    </head>  
    <body>
        <header>
            <a href="../tela-inicial/tela-inicial.php">
                <img src="../imagens/Icone_Controle.png" alt="Ícone" class="logo">
            </a>
            <div class="search-bar">
                <input type="text" placeholder="O que deseja descobrir?">
            </div>
            <nav>
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

    <h2>Saiba mais sobre os eventos de games!</h2>
    <section class="cards-section">
        <div class="card-container">
            <div class="card">
                <a href="https://www.brasilgameshow.com.br/">
                    <img src="../imagens/bgs-logo.png" alt="Logo Bgs">
                </a>
                <div class="overlay">
                    <h2>Saiba Mais</h2>
                </div>
            </div>
            <div class="card">
                <a href="https://www.ccxp.com.br/">
                    <img src="../imagens/ccxp-logo.jpg" alt="Logo CCXP">
                </a>
                <div class="overlay">
                    <h2>Saiba Mais</h2>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <a href="https://www.comic-con.org/">
                    <img src="../imagens/comic-con.jpg" alt="Logo Comic Con">
                </a>
                <div class="overlay">
                    <h2>Saiba Mais</h2>
                </div>
            </div>
            <div class="card">
                <a href="https://latam.gamescom.global/pt/">
                    <img src="../imagens/gamescomlatam-logo.jpg" alt="Logo Gamescom Latam">
                </a>
                <div class="overlay">
                    <h2>Saiba Mais</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="subscription-section">
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-item">
                    <div class="content">
                        <h1>Conheça os concorrentes ao GOTY!</h1>
                        <p>Para mais informações sobre os concorrentes ao GOTY (Game of the year) clique nas setas ao lado!</p>
                        <img src="../imagens/goty-eventos.jpg">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <h1>Senua’s Saga: Hellblade II</h1>
                        <p>É uma obra-prima cinematográfica que não apenas manteve, mas elevou o padrão estabelecido por seu antecessor. A jornada brutal e bela de Senua oferece uma experiência imersiva.</p>
                        <img src="../imagens/game1-eventos.png" alt="Senua's Saga">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <h1>Black Myth: Wukong</h1>
                        <p>Este jogo, desenvolvido pela Game Science, é uma verdadeira obra de arte, tanto em termos visuais quanto de gameplay.</p>
                        <img src="../imagens/game2-eventos.jpg">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <h1>Final Fantasy VII Rebirth</h1>
                        <p>Conseguiu expandir e aprofundar o legado de um dos RPGs mais amados de todos os tempos. A Square Enix não apenas recriou um mundo clássico.</p>
                        <img src="../imagens/game3-eventos.jpeg">
                    </div>
                </div>
            </div>
            <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
            <div class="indicators">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
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