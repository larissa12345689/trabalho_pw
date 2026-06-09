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
 