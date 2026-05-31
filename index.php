<?php
// 1. O PHP inicial resolve as sessões ANTES de qualquer HTML existir
session_start();

if (isset($_SESSION['mensagem'])) {
    echo "<p>" . $_SESSION['mensagem'] . "</p>";
    unset($_SESSION['mensagem']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petty - Hero Section</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- <a href="cadastro.php">Cadastrar</a><br>
    <a href="processa_listar_pet.php">Listar</a><br>
    <a href="processa_listar_pet.php">Deletar</a><br>
    <a href="processa_listar_pet.php">Atualizar</a><br> -->

    <header class="hero-section">
        <div class="paw-bg paw-1">🐾</div>
        <div class="paw-bg paw-2">🐾</div>
        <div class="paw-bg paw-3">🐾</div>

        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <span class="logo-icon">🐾</span> PetCare
                </div>
                <ul class="nav-links">
                    <li><a href="#" class="active">Início</a></li>
                    <li><a href="#">Agendamentos</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">login</a></li>
                </ul>
                <div class="cart-button">
                    <span class="cart-icon">🛒</span> 10 000 р.
                </div>
            </nav>

            <div class="hero-content">
                <div class="hero-left">
                    <h1 class="hero-title">Cuidado completo para seu pet</h1>
                    <button class="btn-cta">Посмотреть друзей</button>
                </div>
                
                <div class="hero-right">
                    <div class="main-animals-placeholder">
                        <!-- <img src="imgs/_dreamy_eyes__cozy_vibes____-removebg-preview (1).png" alt="gata branco" width="500" height="500"> -->
                        <img src="imgs/cachorro-pastor-alemao-saiba-mais-sobre-a-raca-capa-removebg-preview (1).png" alt="cachorro pastor alemão" width="780" height="600">
                    </div>
                </div>
            </div>

            <div class="slider-container">
                <button class="arrow-btn btn-left">‹</button>
                
                <div class="cards-wrapper">
                    <div class="pet-card">
                        <span class="card-title">Собаки</span>
                        <div class="card-img dog-placeholder"></div>
                    </div>
                    <div class="pet-card">
                        <span class="card-title">Кошки</span>
                        <div class="card-img cat-placeholder"></div>
                    </div>
                </div>

                <button class="arrow-btn btn-right">›</button>
            </div>
        </div>
    </header>

</body>
</html>



