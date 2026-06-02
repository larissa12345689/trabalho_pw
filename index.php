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
                <span class="logo-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></span>
                <span class="logo-text">PetCare</span>
            </div>

            <div class="links">
                <a href="index.php" class="active">Início</a>
                <a href="agendamentos.php">Agendamentos</a>
                <a href="pagina">Avaliações</a>
                <a href="login.php">Login</a>
            </div>
        
            <div class="carrinho-button">
                <span class="carrinho-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M223.5-103.5Q200-127 200-160t23.5-56.5Q247-240 280-240t56.5 23.5Q360-193 360-160t-23.5 56.5Q313-80 280-80t-56.5-23.5Zm400 0Q600-127 600-160t23.5-56.5Q647-240 680-240t56.5 23.5Q760-193 760-160t-23.5 56.5Q713-80 680-80t-56.5-23.5ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/></svg></span>
                <span class="carrinho-text">Loja</span>
            </div>
         </nav>

    <div class="container-seção-principal"> 
        <div class="container-text">   
            <h1>Cuidado completo para seu pet</h1>
            <p>O cuidado que o seu melhor amigo merece.</p>
            
            <a href="agendamentos.php">
                <div class="btn-agende">
                    <p>agende agora!</p>
                </div>
            </a>
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
        <a href="agendamentos.php"><button class="btn-agendar">Agendar</button><a></a>
    </div>

    <div class="card-pet">
        <div class="badge-destaque">Destaque</div>
        <div class="card-pet-img">🐱</div>
        <h3>Gatinhos</h3>
        <a href="agendamentos.php"><button class="btn-agendar">Agendar</button><a></a>
    </div>

    <div class="card-pet">
        <div class="card-pet-img">🦜</div>
        <h3>Passarinhos</h3>
        <a href="agendamentos.php"><button class="btn-agendar">Agendar</button></a>
    </div>

    <div class="card-pet">
        <div class="card-pet-img">🐾</div>
        <h3>Mais</h3>
        <a href="agendamentos.php"><button class="btn-agendar">Agendar</button></a>
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

    