<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - PetCare</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
 
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(180deg, #8E8CD8 0%, #7a78c8 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
 
        .paw-bg {
            position: fixed;
            color: rgba(255,255,255,0.15);
            pointer-events: none;
            transform: rotate(-15deg);
            z-index: 0;
        }
        .paw-1 { top: 60px; left: 30px; font-size: 6rem; }
        .paw-2 { top: 40px; right: 15%; font-size: 7rem; }
        .paw-3 { bottom: 80px; left: 40px; font-size: 5rem; }
 
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 18px 80px;
            width: 100%;
            height: 90px;
            position: fixed;
            top: 0; left: 0;
            z-index: 10;
            background: rgba(142, 140, 216, 0.3);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.15);
        }
 
        .logo { display: flex; align-items: center; gap: 10px; }
        .logo-icon { background-color: #ff9f43; padding: 10px; border-radius: 50%; font-size: 18px; display: flex; }
        .logo-text { color: #fff; font-size: 24px; font-weight: 900; }
 
        .links { display: flex; align-items: center; gap: 30px; }
        .links a { text-decoration: none; color: #fff; font-weight: 500; font-size: 16px; opacity: 0.8; padding-bottom: 5px; border-bottom: 3px solid transparent; transition: all 0.3s; }
        .links a:hover, .links a.ativo { opacity: 1; border-bottom-color: #ff9f43; }
 
        .carrinho-button { display: flex; align-items: center; gap: 10px; background-color: #ff9f43; color: #fff; padding: 12px 24px; border-radius: 25px; font-weight: bold; cursor: pointer; }
 
        .pagina-formulario {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 120px 20px 60px;
            position: relative;
            z-index: 2;
        }
 
        .caixa-formulario {
            background: #fff;
            border-radius: 28px;
            padding: 40px 36px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 24px 60px rgba(60, 56, 120, 0.25);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
        }
 
        .formulario-icone {
            font-size: 2.5rem;
            background: #f0eeff;
            width: 70px; height: 70px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 6px;
        }
 
        .formulario-titulo { font-size: 1.6rem; font-weight: 900; color: #3d3a6e; text-align: center; margin: 0; }
        .formulario-subtitulo { font-size: 0.88rem; color: #6b6898; text-align: center; margin: 0 0 10px; }
 
        .formulario { width: 100%; display: flex; flex-direction: column; gap: 14px; margin-top: 8px; }
 
        .campo-grupo { display: flex; flex-direction: column; gap: 5px; }
        .campo-label { font-size: 0.82rem; font-weight: 800; color: #3d3a6e; }
 
        .campo-input {
            padding: 11px 14px;
            border-radius: 14px;
            border: 2px solid #e0dff5;
            font-family: 'Nunito', sans-serif;
            font-size: 0.9rem; font-weight: 600; color: #3d3a6e;
            outline: none; background: #fafafa;
            transition: border-color 0.2s, box-shadow 0.2s;
            width: 100%;
        }
        .campo-input::placeholder { color: #b0aed0; font-weight: 500; }
        .campo-input:focus { border-color: #8E8CD8; box-shadow: 0 0 0 4px rgba(142,140,216,0.12); background: #fff; }
 
        .btn-formulario {
            width: 100%; padding: 13px;
            background-color: #8E8CD8; color: #fff; border: none;
            border-radius: 25px; font-family: 'Nunito', sans-serif;
            font-size: 0.95rem; font-weight: 800; cursor: pointer;
            margin-top: 4px;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 6px 20px rgba(142,140,216,0.35);
        }
        .btn-formulario:hover { background-color: #ff9f43; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(255,159,67,0.35); }
 
        .formulario-rodape { margin-top: 8px; font-size: 0.85rem; color: #6b6898; font-weight: 600; text-align: center; }
        .link-formulario { color: #8E8CD8; font-weight: 800; text-decoration: none; transition: color 0.2s; }
        .link-formulario:hover { color: #ff9f43; }
    </style>
</head>
<body class="body-login">
 
    <div class="paw-bg paw-1">🐾</div>
    <div class="paw-bg paw-2">🐾</div>
    <div class="paw-bg paw-3">🐾</div>
 
    <nav class="navbar navbar-login">
        <div class="logo">
            <span class="logo-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg>
            </span>
            <span class="logo-text">PetCare</span>
        </div>
 
        <div class="links">
            <a href="index.php">Início</a>
            <a href="agendamentos.php">Agendamentos</a>
            <a href="#">Avaliações</a>
            
        </div>
 
        <div class="carrinho-button">
            <span class="carrinho-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M223.5-103.5Q200-127 200-160t23.5-56.5Q247-240 280-240t56.5 23.5Q360-193 360-160t-23.5 56.5Q313-80 280-80t-56.5-23.5Zm400 0Q600-127 600-160t23.5-56.5Q647-240 680-240t56.5 23.5Q760-193 760-160t-23.5 56.5Q713-80 680-80t-56.5-23.5ZM246-720l96 200h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/></svg>
            </span>
            <span class="carrinho-text">Loja</span>
        </div>
    </nav>
 
    <div class="pagina-formulario">
        <div class="caixa-formulario">
 
            <div class="formulario-icone">🐕</div>
            <h2 class="formulario-titulo">Criar Conta</h2>
            <p class="formulario-subtitulo">Cadastre-se e cuide do seu pet com a gente!</p>
 
            <form action="processa_cadastro.php" method="POST" class="formulario">
                <div class="campo-grupo">
                    <label class="campo-label">Usuário</label>
                    <input type="text" name="usuario" placeholder="Escolha um nome de usuário" class="campo-input" required>
                </div>
 
                <div class="campo-grupo">
                    <label class="campo-label">E-mail</label>
                    <input type="email" name="email" placeholder="seu@email.com" class="campo-input" required>
                </div>
 
                <div class="campo-grupo">
                    <label class="campo-label">Senha</label>
                    <input type="password" name="senha" placeholder="Crie uma senha segura" class="campo-input" required>
                </div>
 
                <button type="submit" class="btn-formulario">Cadastrar</button>
            </form>
 
            <p class="formulario-rodape">
                Já tem uma conta? <a href="login.php" class="link-formulario">Faça Login aqui</a>
            </p>
        </div>
    </div>
 
</body>
</html>
 