<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Cuidado Completo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=pets" />
</head>
<body>

    <div class="bg-gradient">
        <header class="nav-sombra">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg> PetCare
            </div>

            <div>
                <nav>
                    <a href="#">Início</a>
                    <a href="#">Agendamentos</a>
                    <a href="#">Avaliações</a>
                    <a href="#">Login</a>
                </nav>
            </div>
            
        </header>

        <section class="hero">
            <div class="hero-text">
                <h1>Cuidado Completo para <br>seu Pet</h1>
                <p>Oferecemos os melhores serviços de banho, tosa e atendimento veterinário para deixar seu pet feliz e saudável.</p>
                <a href="#" class="btn btn-white">Agendar Agora</a>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cachorro e Gato juntos">
            </div>
        </section>
    </div>

    <section>
        <h2 class="section-title">Nossos Serviços</h2>
        <p class="section-subtitle">Tudo o que seu pet precisa em um só lugar</p>
        
        <div class="services-grid">
            <div class="service-card card-pink">
                <div class="icon">✂️</div>
                <h3>Banho & Tosa</h3>
                <p>Serviços completos de higiene e estética para seu pet com profissionais qualificados.</p>
                <a><button class="btn-agendar">Agendar</button></a>
            </div>
            <div class="service-card card-purple">
                <div class="icon">🩺</div>
                <h3>Consultas Veterinárias</h3>
                <p>Atendimento veterinário de qualidade com médicos especializados.</p>
                <a><button class="btn-agendar">Agendar</button></a>
            </div>
            <div class="service-card card-orange">
                <div class="icon">📅</div>
                <h3>Agendamento Online</h3>
                <p>Agende seus serviços de forma rápida e prática pelo nosso sistema.</p>
            </div>
            <div class="service-card card-red">
                <div class="icon">❤️</div>
                <h3>Cuidado Especial</h3>
                <p>Tratamento personalizado e carinhoso para cada pet.</p>
            </div>
        </div>
    </section>
<!-- 
    <section style="background-color: #fdfdfd;">
        <h2 class="section-title">Nossos Clientes</h2>
        <p class="section-subtitle">Pets felizes e bem cuidados</p>
         -->
        <!-- <div class="clients-grid">
            <img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Cachorro 1">
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Gato 1">
            <img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Cachorro 2">
            <img src="https://images.unsplash.com/photo-1513360371669-4adf3dd7dff8?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Gato 2">
        </div> -->

    <section class="carousel-section">
        <h2 class="section-title">Nossos Clientes</h2>
        <p class="section-subtitle">Pets felizes e bem cuidados</p>
    
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active"><img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=500&q=80" alt="Pet 1"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?auto=format&fit=crop&w=500&q=80" alt="Pet 2"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?auto=format&fit=crop&w=500&q=80" alt="Pet 3"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1513360371669-4adf3dd7dff8?auto=format&fit=crop&w=500&q=80" alt="Pet 4"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?auto=format&fit=crop&w=500&q=80" alt="Pet 5"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=500&q=80" alt="Pet 6"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1574158622643-69d34d72650a?auto=format&fit=crop&w=500&q=80" alt="Pet 7"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1592194996308-7b43878e84a6?auto=format&fit=crop&w=500&q=80" alt="Pet 8"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1535268647977-a403b69078bb?auto=format&fit=crop&w=500&q=80" alt="Pet 9"></div>
                <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?auto=format&fit=crop&w=500&q=80" alt="Pet 10"></div>
            </div>

            <div class="carousel-dots">
                <span class="dot active" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
            </div>
        </div>
    </section>
    

    <section>
        <h2 class="section-title">O que Dizem Sobre Nós</h2>
        <p class="section-subtitle">Avaliações reais de tutores satisfeitos</p>
        
        <div class="testimonials-grid">
            <div class="review-card">
                <div class="hearts">❤️❤️❤️❤️❤️</div>
                <p class="review-text">"Atendimento excepcional! Meu pet adora vir aqui."</p>
                <p class="review-author">- Maria Silva</p>
            </div>
            <div class="review-card">
                <div class="hearts">💜💜💜💜💜</div>
                <p class="review-text">"Profissionais super qualificados e carinhosos!"</p>
                <p class="review-author">- João Santos</p>
            </div>
            <div class="review-card">
                <div class="hearts">🧡🧡🧡🧡🧡</div>
                <p class="review-text">"Melhor pet shop da região, sem dúvida!"</p>
                <p class="review-author">- Ana Costa</p>
            </div>
        </div>
        <a href="#" class="btn btn-pink">Ver Todas as Avaliações</a>
    </section>

    <section class="bg-gradient bottom-cta">
        <h2 style="font-size: 36px; margin-bottom: 10px;">Pronto para cuidar do seu pet?</h2>
        <p style="font-size: 18px; margin-bottom: 30px;">Agende agora mesmo e garanta o melhor cuidado para seu amigo</p>
        <a href="#" class="btn btn-white">Fazer Agendamento</a>
    </section>

    <style>
        /* Estilos Globais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #fcfcfc;
        }

        /* Variáveis de Cores (Gradiente Principal) */
        .bg-gradient {
            background: linear-gradient(90deg, #AC38FF 0%, #F13689 50%, #FF8D1A 100%);
            color: white;
        }

        .nav-sombra{
            background: rgba(255, 255, 255, 0.03); 
            border-bottom: 1px solid rgba(0, 0, 0, 0.15); 
            box-shadow: 0 8px 6px -6px rgba(55, 53, 53, 0.3);
        }

        /* Botões */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }
        .btn:hover { opacity: 0.9; transform: scale(1.1); }
        .btn-white { background: white; color: #9c27b0; }
        .btn-gradient { background: linear-gradient(to right, #b92b27, #1565C0); color: white; } /* Placeholder, reescrito abaixo */
        .btn-pink { background: linear-gradient(to right, #e040fb, #d81b60); color: white; }

        .btn-agendar{
            display: inline-block;
            margin-top: 15px;
            padding: 8px 18px;
            background-color: rgba(255, 255, 255, 0.2); /* Branco bem transparente */
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.4); /* Borda sutil para dar acabamento */
            border-radius: 15px; /* Deixa o botão arredondado igual aos cards */
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-agendar:hover {
            background-color: #ffffff; 
            color: #5b5b60; 
            transform: translateY(-2px); 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Estilos do Carrossel */
        .carousel-container {
            max-width: 450px; /* Tamanho fixo para focar em uma foto por vez */
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .carousel-track {
            position: relative;
            width: 100%;
            height: 350px; /* Altura controlada do quadrado da foto */
        }

        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out; /* Efeito suave de fade ao trocar */
            z-index: 1;
        }

        .carousel-slide.active {
            opacity: 1;
            z-index: 2;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Mantém a proporção perfeita sem distorcer */
            border-radius: 20px; /* Bordas arredondadas iguaizinhos ao seu design */
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        /* Área das Bolinhas Indicadoras */
        .carousel-dots {
            text-align: center;
            margin-top: 20px;
        }

        .dot {
            cursor: pointer;
            height: 12px;
            width: 12px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        /* Bolinha ativa ou quando o mouse passa por cima */
        .dot.active, .dot:hover {
            background-color: #F13689; /* Usa o rosa do seu gradiente principal */
            transform: scale(1.2);
        }

        /* Cabeçalho / Navbar */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3 ease;
            opacity: 0.8;
            display: inline-block;
            transition: opacity 0.2s ease, transform 0.2s ease;
        }

        nav a:hover{
            opacity: 1;
            transform: scale(1.1);
        }

        /* Seção Hero (Topo) */
        .hero {
            display: flex;
            padding: 100px;
            align-items: center;
            justify-content: space-between;
        }
        .hero-text {
            max-width: 60%;
            text-align: left;
        }
        .hero h1 {
            font-size: 54px;
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 25px;
        }
        .hero p {
            font-size: 21px;
            font-weight: 400;
            opacity: 0.95;
            margin-bottom: 30px;
            line-height: 1.4;
        }
        .hero-image img {
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            object-fit: cover;
            margin-right: 40px;
        }

        /* Seções Gerais */
        section { padding: 60px 50px; text-align: center; }
        .section-title { font-size: 35px; margin-bottom: 10px; color: #1a1a2e; }
        .section-subtitle { color: #666; margin-bottom: 50px; }

        /* Grid de Serviços */
        .services-grid {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .service-card {
            flex: 1;
            min-width: 200px;
            min-height: 200px;
            padding:  20px;
            border-radius: 15px;
            color: white;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .service-card h3 { margin: 15px 0 10px; }
        .service-card p { font-size: 15px; line-height: 1.4; opacity: 0.9; }
        .icon {
            display: inline-block;
            background: white;
            color: #333;
            width: 40px; height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        .card-pink { background: linear-gradient(135deg, #fa528a, #db266f); }
        .card-purple { background: linear-gradient(135deg, #e040fb, #7b1fa2); }
        .card-orange { background: linear-gradient(135deg, #ffa217, #fa5d08); }
        .card-red { background: linear-gradient(135deg, #ff5252, #c62828); }

        /* Grid de Clientes (Fotos) */
        .clients-grid {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .clients-grid img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Avaliações */
        .testimonials-grid {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .review-card {
            background: #fff0f5; /* Rosa bem claro */
            padding: 20px;
            border-radius: 15px;
            flex: 1;
            min-width: 250px;
            text-align: left;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .review-card:nth-child(2) { background: #f3e5f5; } /* Roxo claro */
        .review-card:nth-child(3) { background: #fff8e1; } /* Laranja claro */
        
        .hearts { color: #e91e63; margin-bottom: 15px; }
        .review-card:nth-child(2) .hearts { color: #9c27b0; }
        .review-card:nth-child(3) .hearts { color: #ff9800; }
        
        .review-text { font-style: italic; margin-bottom: 15px; font-size: 14px; color: #555; }
        .review-author { font-weight: bold; }

        /* CTA Inferior */
        .bottom-cta {
            padding: 80px 20px;
        }
    </style>

    <script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');

    function showSlides(index) {
        // Trata os limites caso mude dinamicamente
        if (index >= slides.length) slideIndex = 0;
        if (index < 0) slideIndex = slides.length - 1;

        // Remove a classe active de todas as fotos e bolinhas
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        // Ativa apenas a foto e a bolinha correspondente ao índice clicado
        slides[slideIndex].classList.add('active');
        dots[slideIndex].classList.add('active');
    }

    function currentSlide(index) {
        slideIndex = index;
        showSlides(slideIndex);
    }

    // Opcional: Se quiser que o carrossel mude sozinho a cada 4 segundos, descomente a linha abaixo:
    // setInterval(() => { slideIndex++; showSlides(slideIndex); }, 4000);
</script>
</body>
</html>