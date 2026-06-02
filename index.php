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
    <h2 class="destaque-titulo">PetCare?</h2>

    <div class="cards-motivos">
        <div class="card-motivo" id="motivo-verde">
            <div class="motivo-icon">🐾</div>
            <h3>serviços de qualidade</h3>
            <p>os melhores serviços para manter seu pet limpinho e saudável.</p>
        </div>
        <div class="card-motivo" id="motivo-amarelo">
            <div class="motivo-icon">💊</div>
            <h3>Saúde garantida</h3>
            <p>Profissionais especializados para garantir a saúde de seus bichinhos.</p>
        </div>
        <div class="card-motivo" id="motivo-rosa">
            <div class="motivo-icon">❤️</div>
            <h3>Muito amor</h3>
            <p>Cuidamos com carinho de cada pet como se fosse nosso.</p>
        </div>
    </div>
</section>

<section class="secao-animais">
    <h2 class="titulo-secao">Atendimento para seus<div class="destaque-titulo">melhores amigos!</div></h2>

    <div class="animais-catalogo">
        <div class="animal" id="roxo">Cachorros</div>
        <div class="animal" id="rosa">Gatos</div>
        <div class="animal" id="azul">Pássaros</div>
        <div class="animal" id="laranja">Coelhos</div>
        <div class="animal" id="verde">Cobras</div>
        <div class="animal" id="vermelho">Furões</div>
    </div>

    <div class="grid-catalogo">
    <div class="card-pet">
        <div class="badge-destaque">Destaque</div>
        <div class="card-pet-img">🐶</div>
        <h3>Doguinhos</h3>
        <button class="btn-agendar">Agendar</button>
    </div>

    <div class="card-pet">
        <div class="badge-destaque">Destaque</div>
        <div class="card-pet-img">🐱</div>
        <h3>Gatinhos</h3>
        <button class="btn-agendar">Agendar</button>
    </div>

    <div class="card-pet">
        <div class="card-pet-img">🦜</div>
        <h3>Passarinhos</h3>
        <button class="btn-agendar">Agendar</button>
    </div>

    <div class="card-pet">
        <div class="card-pet-img">🐾</div>
        <h3>Mais</h3>
        <button class="btn-agendar">Agendar</button>
    </div>
</div>
       
    </div>
</section>


<section class="secao-galeria">
    <h2 class="titulo-secao">Vida dos amigos 🐾</h2>
    <div class="grid-galeria">
        <div class="foto-galeria grande" style="background: linear-gradient(135deg, #a29bfe, #6c5ce7); font-size: 6rem; display:flex; align-items:center; justify-content:center;"><img src="imgs/dog.jpg" width="400px" height="500px"></div>
        <div class="foto-galeria" style="background: linear-gradient(135deg, #fd79a8, #e84393); font-size: 5rem; display:flex; align-items:center; justify-content:center;"><img src="imgs/baixados (13).jpg" width="450px" height="320px"></div>
        <div class="foto-galeria" style="background: linear-gradient(135deg, #ffeaa7, #fdcb6e); font-size: 5rem; display:flex; align-items:center; justify-content:center;"><img src="imgs/baixados (10).jpg" width="350px" height="220px"></div>
        <div class="foto-galeria" style="background: linear-gradient(135deg, #55efc4, #00b894); font-size: 5rem; display:flex; align-items:center; justify-content:center;"><img src="imgs/baixados (11).jpg" width="350px" height="300px"></div>
        <div class="foto-galeria" style="background: linear-gradient(135deg, #74b9ff, #0984e3); font-size: 5rem; display:flex; align-items:center; justify-content:center;"><img src="imgs/baixados (12).jpg" width="350px" height="300px"></div>
        
    </div>
</section>

<section class="secao-sobre">
    <div class="sobre-texto">
        <h2 class="titulo-secao">Sobre a PetCare</h2>
        <p>Somos apaixonados por animais e acreditamos que cada pet merece o melhor cuidado possível. Nossa equipe de veterinários e cuidadores está sempre pronta para garantir o bem-estar do seu melhor amigo.</p>
        <p>Oferecemos serviços completos: consultas, banho e tosa, vacinas e muito mais. Tudo com o carinho que o seu animal merece.</p>
        <a href="#" class="btn-sobre">Saiba mais</a>
    </div>
    <div class="sobre-pets-emoji">
        🐕🐈🐇🦜
    </div>
</section>

<footer class="footer">
    <div class="footer-logo">
        <span class="logo-icon">🐾</span>
        <span class="logo-text">PetCare</span>
    </div>
    <div class="footer-links">
        <a href="#">Sobre nós</a>
        <a href="#">Serviços</a>
        <a href="#">Contato</a>
    </div>
    <div class="footer-redes">
        
    </div>
    <p class="footer-copy">© 2025 PetCare. Todos os direitos reservados.</p>
</footer>
</body>
</html>

    