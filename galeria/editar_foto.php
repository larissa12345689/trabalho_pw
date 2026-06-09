<?php
session_start();
require_once "../conexao.php";
 
$id = $_GET['id'];
 
$stmt = $conn->prepare("
    SELECT *
    FROM galeria_pet
    WHERE id = :id
    AND usuario_id = :usuario_id
");
 
$stmt->bindValue(':id', $id);
$stmt->bindValue(':usuario_id', $_SESSION['usuario_id']);
$stmt->execute();
 
$foto = $stmt->fetch(PDO::FETCH_ASSOC);
 
if(!$foto){
    die("Foto não encontrada");
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Foto – PetCare</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 16px 60px;
            background: linear-gradient(180deg, #8E8CD8 0%, #7a78c8 100%);
        }
 
        .navbar-topo {
            width: 100%;
            max-width: 620px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        }
 
        .logo-topo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.3rem;
            font-weight: 900;
            color: #fff;
            text-decoration: none;
        }
 
        .logo-topo svg { fill: #fff; }
 
        .logo-icon-topo {
            background-color: #ff9f43;
            padding: 8px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
 
        .link-voltar-nav {
            font-size: .88rem;
            font-weight: 700;
            color: #8E8CD8;
            text-decoration: none;
            background: #fff;
            padding: 8px 18px;
            border-radius: 50px;
            box-shadow: 0 4px 16px rgba(255,255,255,.2);
            transition: background .2s, color .2s;
        }
 
        .link-voltar-nav:hover { background: #ff9f43; color: #fff; }
 
        /* ── Caixa ── */
        .caixa {
            background: #fff;
            border-radius: 28px;
            box-shadow: 0 8px 32px rgba(60, 56, 120, 0.25);
            padding: 48px 44px 40px;
            width: 100%;
            max-width: 620px;
            position: relative;
            overflow: hidden;
        }
 
        .caixa::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 6px;
            background:#fff;
        }
 
        .caixa h2 {
            font-size: 1.7rem;
            font-weight: 900;
            color: #3d3a6e;
            margin-bottom: 32px;
            text-align: center;
        }
 
        /* ── Foto atual (polaroid mini) ── */
        .foto-atual {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 28px;
        }
 
        .foto-atual-label {
            font-size: .78rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .07em;
            color: #8E8CD8;
            margin-bottom: 12px;
            align-self: flex-start;
        }
 
        .polaroid-mini {
            background: #fff;
            padding: 10px 10px 36px;
            box-shadow: 0 6px 20px rgba(60,56,120,.18), 2px 2px 0 #e8e4ff;
            border-radius: 3px;
            transform: rotate(-2deg);
            transition: transform .3s ease;
        }
 
        .polaroid-mini:hover { transform: rotate(0deg) scale(1.03); }
 
        .polaroid-mini img {
            width: 160px;
            height: 140px;
            object-fit: cover;
            display: block;
            border-radius: 2px;
        }
 
        .polaroid-mini-nome {
            font-size: .85rem;
            font-weight: 800;
            color: #3d3a6e;
            text-align: center;
            margin-top: 8px;
        }
 
        /* ── Campos ── */
        .campo-grupo {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 20px;
        }
 
        .campo-label {
            font-size: .78rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .07em;
            color: #8E8CD8;
        }
 
        .campo-input {
            border: 2px solid #e8e4ff;
            border-radius: 12px;
            padding: 10px 14px;
            font-size: .95rem;
            font-family: 'Nunito', sans-serif;
            color: #2d2d2d;
            background: #faf9ff;
            outline: none;
            width: 100%;
            transition: border-color .2s, box-shadow .2s;
        }
 
        .campo-input:focus {
            border-color: #8E8CD8;
            box-shadow: 0 0 0 4px rgba(142,140,216,.15);
        }
 
        /* ── Botão ── */
        .btn-salvar {
            display: block;
            width: 100%;
            padding: 14px;
            background: #8E8CD8;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            font-weight: 800;
            border: none;
            border-radius: 14px;
            cursor: pointer;
            margin-top: 8px;
            box-shadow: 0 6px 20px rgba(142,140,216,.4);
            transition: transform .15s, box-shadow .15s, background .2s;
        }
 
        .btn-salvar:hover {
            background: #ff9f43;
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(255,159,67,.35);
        }
 
        .btn-salvar:active { transform: translateY(0); }
 
        @media (max-width: 540px) {
            .caixa { padding: 36px 22px 28px; }
            .caixa h2 { font-size: 1.35rem; }
        }
    </style>
</head>
<body>
 
    <nav class="navbar-topo">
        <a href="../index.php" class="logo-topo">
            <span class="logo-icon-topo">
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg>
            </span>
            PetCare
        </a>
        <a href="listar_fotos.php" class="link-voltar-nav">← Voltar</a>
    </nav>
 
    <div class="caixa">
        <h2>Editar Foto ✏️</h2>
 
        <div class="foto-atual">
            <span class="foto-atual-label">Foto atual</span>
            <div class="polaroid-mini">
                <img src="<?= htmlspecialchars($foto['foto']) ?>" alt="<?= htmlspecialchars($foto['nome_pet']) ?>">
                <p class="polaroid-mini-nome"><?= htmlspecialchars($foto['nome_pet']) ?></p>
            </div>
        </div>
 
        <form action="processa_editar_foto.php" method="POST">
            <input type="hidden" name="id" value="<?= $foto['id'] ?>">
 
            <div class="campo-grupo">
                <label class="campo-label">Nome do Pet</label>
                <input type="text" name="nome_pet"
                       value="<?= htmlspecialchars($foto['nome_pet']) ?>"
                       class="campo-input" required>
            </div>
 
            <button type="submit" class="btn-salvar">Salvar Alterações 💾</button>
        </form>
    </div>
 
</body>
</html>