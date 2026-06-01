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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800;900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="seção-principal">
        <div class="paw-bg paw-1">🐾</div>
        <div class="paw-bg paw-2">🐾</div>
        <div class="paw-bg paw-3">🐾</div>

        <nav class="navbar">
            <div class="logo">
                <span class="logo-icon">🐾</span>
                <span class="logo-text">PetCare</span>
            </div>

            <div class="links">
                <a href="index.php" class="active">Início</a>
                <a href="agendamentos.php">Agendamentos</a>
                <a href="pagina">pagina</a>
                <a href="login.php">Login</a>
            </div>
        
            <div class="carrinho-button">
                <span class="carrinho-icon">🛒</span>
                <span class="carrinho-text">Loja</span>
            </div>
         </nav>

    <div class="container-seção-principal"> 
        <div class="container-text">   
            <h1>Cuidado completo para seu pet</h1>
            <p>O cuidado que o seu melhor amigo merece.</p>
            
            <div class="btn-agende">
                <p>agende agora!</p>
            </div>
        </div>

        <div class="seção-image-container"> 
            <div class="bg-light-glow"></div>
            <img src="imgs/baixados__6_-removebg-preview.png" class="img-cat">
            <img src="imgs/cachorro-pastor-alemao-saiba-mais-sobre-a-raca-capa-removebg-preview (1).png" alt="Cachorro Pastor Alemão" class="img-dog">
        </div>
    </div>
    </header>

    <div class="carrossel">
        <div class="card-carrossel" id="rosa">
            <div class="hearts">❤️❤️❤️❤️❤️</div>
                <p class="review-text">"Atendimento excepcional! Meu pet adora vir aqui."</p>
                <p class="review-author">- Maria Silva</p>
        </div>

        <div class="card-carrossel" id="lilas">
            <div class="hearts">💜💜💜💜💜</div>
                <p class="review-text">"Profissionais super qualificados e carinhosos!"</p>
                <p class="review-author">- João Santos</p>
        </div>

         <!-- <div class="card-carrossel"></div>
        <div class="card-carrossel"></div>

        <div class="card-carrossel"></div>
        <div class="card-carrossel"></div> -->
    </div>

    <section class="secao-por-que-escolher">
        <h2>Por que escolher</h2>
        <h2>PetCare?</h2>
    </section>


</body>
</html>

    