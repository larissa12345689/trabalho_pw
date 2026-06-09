<?php
session_start();
require_once "../conexao.php";
 
$stmt = $conn->query("
    SELECT * FROM galeria_pet ORDER BY id DESC");
 
$fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Pets – PetCare</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(180deg, #8E8CD8 0%, #7a78c8 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }
 
        /* ── Navbar ── */
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 25px 80px;
            width: 100%;
            height: 90px;
            position: relative;
            z-index: 10;
        }
 
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
 
        .logo-icon {
            background-color: #ff9f43;
            padding: 10px;
            border-radius: 50%;
            font-size: 18px;
        }
 
        .logo-text {
            color: #ffffff;
            font-size: 24px;
            font-weight: 900;
            font-family: 'Nunito', sans-serif;
        }
 
        .links {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }
 
        .links a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 500;
            font-family: sans-serif;
            font-size: 16px;
            padding-bottom: 5px;
            opacity: 0.8;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
 
        .links a:hover,
        .links a.active {
            opacity: 1;
            border-bottom-color: #ff9f43;
        }
 
        /* ── Página ── */
        .pagina {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 40px 80px;
        }
 
        .pagina-titulo {
            font-size: 2rem;
            font-weight: 900;
            color: #fff;
            text-align: center;
            margin-bottom: 12px;
        }
 
        .pagina-subtitulo {
            text-align: center;
            color: rgba(255,255,255,0.75);
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 40px;
        }
 
        /* ── Alertas ── */
        .container-alerta {
            display: flex;
            justify-content: center;
            margin-bottom: 28px;
        }
 
        .alerta {
            background: #e6f9f0;
            color: #1a7a52;
            border-radius: 14px;
            padding: 14px 28px;
            font-weight: 700;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
 
        /* ── Botão nova foto ── */
        .btn-nova-foto {
            display: block;
            width: fit-content;
            margin: 0 auto 40px;
            background: #ff9f43;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.95rem;
            padding: 12px 28px;
            border-radius: 25px;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
            box-shadow: 0 4px 15px rgba(255, 159, 67, 0.35);
        }
 
        .btn-nova-foto:hover {
            background: #f9922b;
            transform: translateY(-2px);
        }
 
        /* ── Galeria polaroid ── */
        .galeria {
            display: flex;
            flex-wrap: wrap;
            gap: 32px;
            justify-content: center;
        }
 
        .polaroid {
            background: #fff;
            padding: 14px 14px 50px;
            border-radius: 4px;
            box-shadow: 0 8px 28px rgba(60, 56, 120, 0.2), 0 2px 6px rgba(0,0,0,0.08);
            width: 220px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            cursor: default;
        }
 
        .polaroid:nth-child(odd)  { transform: rotate(-2deg); }
        .polaroid:nth-child(even) { transform: rotate(2deg); }
 
        .polaroid:hover {
            transform: rotate(0deg) scale(1.05) translateY(-6px);
            box-shadow: 0 20px 50px rgba(60, 56, 120, 0.3);
            z-index: 2;
        }
 
        .polaroid img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
            border-radius: 2px;
        }
 
        .polaroid-nome {
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            font-weight: 800;
            color: #3d3a6e;
            text-align: center;
            position: absolute;
            bottom: 14px;
            left: 0;
            right: 0;
            padding: 0 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
 
        .polaroid-acoes {
            position: absolute;
            bottom: -38px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 8px;
            opacity: 0;
            transition: opacity 0.25s ease, bottom 0.25s ease;
        }
 
        .polaroid:hover .polaroid-acoes {
            opacity: 1;
            bottom: -42px;
        }
 
        .polaroid-acoes a {
            font-family: 'Nunito', sans-serif;
            font-size: 0.78rem;
            font-weight: 800;
            text-decoration: none;
            padding: 5px 14px;
            border-radius: 20px;
            transition: background 0.2s ease, transform 0.2s ease;
        }
 
        .polaroid-acoes .btn-editar {
            background: #f0eeff;
            color: #8E8CD8;
        }
 
        .polaroid-acoes .btn-editar:hover {
            background: #8E8CD8;
            color: #fff;
        }
 
        .polaroid-acoes .btn-apagar {
            background: #fdecea;
            color: #e74c3c;
        }
 
        .polaroid-acoes .btn-apagar:hover {
            background: #e74c3c;
            color: #fff;
        }
 
        .apenas-visualizacao {
            font-size: 0.75rem;
            color: #b0aed0;
            font-style: italic;
            text-align: center;
            margin-top: 6px;
        }
 
        /* ── Vazio ── */
        .galeria-vazia {
            text-align: center;
            color: rgba(255,255,255,0.8);
            font-size: 1.1rem;
            font-weight: 700;
            margin-top: 60px;
        }
 
        /* ── Rodapé ── */
        .rodape {
            margin-top: 70px;
            text-align: center;
            padding-bottom: 40px;
        }
 
        .link-voltar {
            font-family: 'Nunito', sans-serif;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: rgba(255,255,255,0.85);
            font-weight: 800;
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.2s ease;
        }
 
        .link-voltar:hover { color: #ff9f43; }
    </style>
</head>
<body>
 
    <nav class="navbar">
        <div class="logo">
            <span class="logo-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg>
            </span>
            <span class="logo-text">PetCare</span>
        </div>
 
        <div class="links">
            <a href="../index.php">Início</a>
            <a href="../agendamentos.php">Agendamentos</a>
            <a href="../avaliacoes/listar_avaliacoes.php">Avaliações</a>
            <a href="listar_fotos.php" class="active">Galeria</a>
        </div>
    </nav>
 
    <div class="pagina">
 
        <h1 class="pagina-titulo">Galeria de Pets 🐾</h1>
        <p class="pagina-subtitulo">Momentos fofos dos nossos amiguinhos</p>
 
        <?php if (isset($_GET['sucesso'])): ?>
            <div class="container-alerta">
                <div class="alerta">✅ Foto cadastrada com sucesso!</div>
            </div>
        <?php endif; ?>
 
        <?php if (isset($_GET['apagado'])): ?>
            <div class="container-alerta">
                <div class="alerta">✅ Foto apagada com sucesso!</div>
            </div>
        <?php endif; ?>
 
        <?php if (isset($_GET['editado'])): ?>
            <div class="container-alerta">
                <div class="alerta">✅ Foto editada com sucesso!</div>
            </div>
        <?php endif; ?>
 
        <a href="cadastro_foto.php" class="btn-nova-foto">+ Adicionar Foto</a>
 
        <?php if (empty($fotos)): ?>
            <p class="galeria-vazia">Nenhuma foto cadastrada ainda. Seja o primeiro! 📸</p>
        <?php else: ?>
            <div class="galeria">
                <?php foreach($fotos as $foto): ?>
                    <div class="polaroid">
                        <img src="<?= htmlspecialchars($foto['foto']) ?>" alt="<?= htmlspecialchars($foto['nome_pet']) ?>">
                        <span class="polaroid-nome"><?= htmlspecialchars($foto['nome_pet']) ?></span>
 
                        <?php if(isset($_SESSION['usuario_id']) && $foto['usuario_id'] == $_SESSION['usuario_id']): ?>
                            <div class="polaroid-acoes">
                                <a href="editar_foto.php?id=<?= $foto['id'] ?>" class="btn-editar">Editar</a>
                                <a href="apagar_foto.php?id=<?= $foto['id'] ?>" class="btn-apagar"
                                   onclick="return confirm('Deseja apagar esta foto?')">Apagar</a>
                            </div>
                        <?php else: ?>
                            <p class="apenas-visualizacao">Apenas visualização</p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
 
    </div>
 
    <div class="rodape">
        <a href="../index.php" class="link-voltar">← Voltar para o início</a>
    </div>
 
</body>
</html>