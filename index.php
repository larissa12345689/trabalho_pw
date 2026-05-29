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
                <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="10.5" stroke="#ffffff" stroke-width="1.5" fill="none"/>
                    
                    <path d="M12 11.5c-1.38 0-2.5 1.12-2.5 2.5 0 .83.41 1.55 1.04 2h2.92c.63-.45 1.04-1.17 1.04-2 0-1.38-1.12-2.5-2.5-2.5z" fill="#ffffff"/>
                    <circle cx="8.5" cy="9.5" r="1" fill="#ffffff"/>
                    <circle cx="10.8" cy="8" r="1" fill="#ffffff"/>
                    <circle cx="13.2" cy="8" r="1" fill="#ffffff"/>
                    <circle cx="15.5" cy="9.5" r="1" fill="#ffffff"/>
                </svg>
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

    <section class="polaroid-section">
        <h2 class="section-title">Nossos Clientes</h2>
        <p class="section-subtitle">Pets felizes e bem cuidados</p>
    
        <div class="polaroid-carousel">
            <div class="polaroid-track">
                
                <div class="polaroid-card tilt-left">
                    <span class="pet-badge badge-heart">❤️</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=400&q=80" alt="Pet 1">
                    </div>
                    <p class="polaroid-caption">Pipoca 🐾</p>
                </div>

                <div class="polaroid-card tilt-right">
                    <span class="pet-badge badge-star">⭐</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?auto=format&fit=crop&w=400&q=80" alt="Pet 2">
                    </div>
                    <p class="polaroid-caption">Mingau ✨</p>
                </div>

                <div class="polaroid-card tilt-left-subtle">
                    <span class="pet-badge badge-sparkle">✨</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?auto=format&fit=crop&w=400&q=80" alt="Pet 3">
                    </div>
                    <p class="polaroid-caption">Fred 🎾</p>
                </div>

                <div class="polaroid-card tilt-right-subtle">
                    <span class="pet-badge badge-clover">🍀</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1513360371669-4adf3dd7dff8?auto=format&fit=crop&w=400&q=80" alt="Pet 4">
                    </div>
                    <p class="polaroid-caption">Luna 🌙</p>
                </div>

                <div class="polaroid-card tilt-left">
                    <span class="pet-badge badge-crown">👑</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1585110396000-c9ffd4e4b308?auto=format&fit=crop&w=400&q=80" alt="Pet 5">
                    </div>
                    <p class="polaroid-caption">Floquinho 🥕</p>
                </div>

                <div class="polaroid-card tilt-right">
                    <span class="pet-badge badge-fire">🔥</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?auto=format&fit=crop&w=400&q=80" alt="Pet 6">
                    </div>
                    <p class="polaroid-caption">Thor ⚡</p>
                </div>

                <div class="polaroid-card tilt-left-subtle">
                    <span class="pet-badge badge-diamond">💎</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?auto=format&fit=crop&w=400&q=80" alt="Pet 7">
                    </div>
                    <p class="polaroid-caption">Mel 🍯</p>
                </div>

                <div class="polaroid-card tilt-right-subtle">
                    <span class="pet-badge badge-bow">🎀</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=400&q=80" alt="Pet 8">
                    </div>
                    <p class="polaroid-caption">Amora 🌸</p>
                </div>

                <div class="polaroid-card tilt-left">
                    <span class="pet-badge badge-sun">☀️</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1535268647977-a403b69078bb?auto=format&fit=crop&w=400&q=80" alt="Pet 9">
                    </div>
                    <p class="polaroid-caption">Apolo ☀️</p>
                </div>

                <div class="polaroid-card tilt-right">
                    <span class="pet-badge badge-music">🎵</span>
                    <div class="polaroid-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1574158622643-69d34d72650a?auto=format&fit=crop&w=400&q=80" alt="Pet 10">
                    </div>
                    <p class="polaroid-caption">Simba 🦁</p>
                </div>

                <div class="polaroid-card tilt-left"><span class="pet-badge badge-heart">❤️</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Pipoca 🐾</p></div>
                <div class="polaroid-card tilt-right"><span class="pet-badge badge-star">⭐</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Mingau ✨</p></div>
                <div class="polaroid-card tilt-left-subtle"><span class="pet-badge badge-sparkle">✨</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Fred 🎾</p></div>
                <div class="polaroid-card tilt-right-subtle"><span class="pet-badge badge-clover">🍀</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1513360371669-4adf3dd7dff8?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Luna 🌙</p></div>
                <div class="polaroid-card tilt-left"><span class="pet-badge badge-crown">👑</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1585110396000-c9ffd4e4b308?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Floquinho 🥕</p></div>
                <div class="polaroid-card tilt-right"><span class="pet-badge badge-fire">🔥</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Thor ⚡</p></div>
                <div class="polaroid-card tilt-left-subtle"><span class="pet-badge badge-diamond">💎</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Mel 🍯</p></div>
                <div class="polaroid-card tilt-right-subtle"><span class="pet-badge badge-bow">🎀</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Amora 🌸</p></div>
                <div class="polaroid-card tilt-left"><span class="pet-badge badge-sun">☀️</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1535268647977-a403b69078bb?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Apolo ☀️</p></div>
                <div class="polaroid-card tilt-right"><span class="pet-badge badge-music">🎵</span><div class="polaroid-img-wrapper"><img src="https://images.unsplash.com/photo-1574158622643-69d34d72650a?auto=format&fit=crop&w=400&q=80"></div><p class="polaroid-caption">Simba 🦁</p></div>
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

       /* Container da Seção */
.polaroid-section {
    padding: 60px 0;
    overflow: hidden;
    background-color: #fdfdfd;
}

/* Área visível do Carrossel */
.polaroid-carousel {
    width: 100%;
    overflow: hidden;
    padding: 40px 0;
    position: relative;
}

/* Esteira que carrega os cards e faz a animação contínua */
.polaroid-track {
    display: flex;
    width: calc(240px * 20 + 30px * 20); /* Calcula dinamicamente o tamanho total das 20 fotos */
    gap: 30px;
    animation: scrollContinuous 35s linear infinite; /* Movimento retilíneo, uniforme e eterno */
}

/* GATILHO DE PARADA: Quando o mouse passa no carrossel, a animação pausa */
.polaroid-carousel:hover .polaroid-track {
    /* animation-play-state: paused; */
}

/* Definição da Estética da Foto Polaroid */
.polaroid-card {
    width: 240px;
    background: #ffffff;
    padding: 14px 14px 24px 14px; /* Base maior simulando a polaroide real */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08), 0 1px 3px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.03);
    position: relative;
    text-align: center;
    display: flex;
    flex-direction: column;
    transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s ease;
    user-select: none;
}

/* Proporção quadrada interna da foto */
.polaroid-img-wrapper {
    width: 100%;
    height: 210px;
    overflow: hidden;
    background-color: #eee;
}

.polaroid-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Legenda da Polaroid (Fonte manuscrita simulada) */
.polaroid-caption {
    font-family: 'Comic Sans MS', 'Chalkboard SE', cursive, sans-serif;
    color: #444;
    font-size: 16px;
    margin-top: 14px;
    font-weight: 500;
}

/* Pequenos Símbolos (Badges) fixados no topo do card */
.pet-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 28px;
    height: 28px;
    background: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    z-index: 10;
}

/* Variações de Inclinação Natural (Efeito bagunçado orgânico) */
.tilt-left { transform: rotate(-3deg); }
.tilt-right { transform: rotate(3deg); }
.tilt-left-subtle { transform: rotate(-1.5deg); }
.tilt-right-subtle { transform: rotate(2deg); }

/* GATILHO DE CRESCIMENTO: Quando o mouse foca em um card específico */
.polaroid-card:hover {
    transform: scale(1.1) rotate(0deg) translateY(-10px); /* Cresce, fica reto e sobe levemente */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    z-index: 999; /* Garante que fique por cima dos vizinhos */
    cursor: pointer;
}

/* Lógica da animação CSS que move o eixo X */
@keyframes scrollContinuous {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-240px * 10 - 30px * 10)); /* Move exatamente metade da esteira */
    }
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

</body>
</html>