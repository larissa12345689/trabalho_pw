<?php
session_start(); 
 
if (isset($_SESSION['usuario_id'])) {
    header("Location: agendamentos.php");
    exit();
}
 
require_once 'conexao2.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha_limpa = $_POST['senha'];
 
    $stmt = $conn->prepare("SELECT * FROM users WHERE usuario = :usuario AND email = :email");
    $stmt->bindValue(':usuario', $usuario);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
 
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if ($dados && password_verify($senha_limpa, $dados['senha'])) {
        $_SESSION['usuario_id'] = $dados['id'];

        header("Location: ../agendamentos.php");
        exit();

    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PetCare</title>
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
 
        .alerta-erro {
            width: 100%; background: #fce4f0; color: #a0186a;
            border-radius: 12px; padding: 12px 16px;
            font-size: 0.9rem; font-weight: 700; text-align: center;
        }
 
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
 
            <div class="formulario-icone">🐾</div>
            <h2 class="formulario-titulo">Bem-vindo de volta!</h2>
            <p class="formulario-subtitulo">Entre na sua conta para agendar serviços</p>
 
            <?php if (!empty($erro)): ?>
                <div class="alerta-erro"><?= $erro ?></div>
            <?php endif; ?>
 
            <form action="login.php" method="POST" class="formulario">
                <div class="campo-grupo">
                    <label class="campo-label">Usuário</label>
                    <input type="text" name="usuario" placeholder="Seu nome de usuário" class="campo-input" required>
                </div>
 
                <div class="campo-grupo">
                    <label class="campo-label">E-mail</label>
                    <input type="text" name="email" placeholder="seu@email.com" class="campo-input" required>
                </div>
 
                <div class="campo-grupo">
                    <label class="campo-label">Senha</label>
                    <input type="password" name="senha" placeholder="Sua senha" class="campo-input" required>
                </div>
 
                <button type="submit" class="btn-formulario">Entrar</button>
            </form>
 
            <p class="formulario-rodape">
                Não tem uma conta? <a href="cadastro.php" class="link-formulario">Cadastre-se aqui</a>
            </p>
        </div>
    </div>
 
</body>
</html>
 