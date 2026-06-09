<?php 
session_start();
require_once "../conexao.php";
require_once "processa_listar_avaliacoes.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações – PetCare</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 16px 60px;
            background: #918fde;
        }

        .navbar {
            display: flex;
            justify-content: space-around; 
            align-items: center;     
            padding: 25px 80px;
            width: 100%; 
            height: 90px; 
            position: absolute; 
            top: 0;
            left: 0;
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
            font-family:'Nunito', sans-serif;
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

        .links a.active {
            opacity: 1;
            border-bottom-color: #ff9f43;
        }

        .links a:hover{
            opacity: 1;
            border-bottom-color: #ff9f43;
        }

 
        /* ── Navbar ── */
        .navbar-aval {
            margin-top: 90px;
            width: 100%;
            max-width: 900px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }
        .logo-aval {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.3rem;
            font-weight: 900;
            color: #ffffff;
            text-decoration: none;
        }
       
        .link-voltar-nav {
            font-size: .88rem;
            font-weight: 700;
            color: #6c5ce7;
            text-decoration: none;
            background: #fff;
            padding: 8px 18px;
            border-radius: 50px;
            box-shadow: 0 4px 16px rgba(108,92,231,.18);
            transition: background .2s, color .2s;
        }

        .link-voltar-nav:hover{
            background-color: #6c5ce7;
            color: white;
        }
        
        /* ── Título ── */
        .pagina-lista { width: 100%; max-width: 900px; }
        .pagina-lista h2 {
            font-size: 2rem;
            font-weight: 900;
            color: #ffffff;
            text-align: center;
            margin-bottom: 24px;
        }
 
        /* ── Alertas ── */
        .alerta {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border-left: 5px solid #00b894;
            color: #155724;
            padding: 14px 20px;
            border-radius: 12px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }
        .alerta-remover {
            background: linear-gradient(135deg, #ffeaa7, #fdcb6e);
            border-left: 5px solid #e17055;
            color: #6d3d00;
        }
 
        /* ── Tabela ── */
        .tabela-container {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(255, 255, 255, 0.18);
            overflow: hidden;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead tr {
            background: whitesmoke;
            color: #7c77d7;
        }
        th {
            padding: 16px 20px;
            font-size: .8rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .08em;
            text-align: left;
        }
        td {
            padding: 16px 20px;
            font-size: .95rem;
            border-bottom: 1px solid #f0eeff;
            vertical-align: middle;
        }
        tbody tr:last-child td { border-bottom: none; }
        tbody tr:hover { background: #faf9ff; }
        td:nth-child(2) { font-size: 1.05rem; }
 
        /* ── Ações ── */
        .celula-acoes {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        .celula-acoes a {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: .82rem;
            font-weight: 800;
            text-decoration: none;
            transition: transform .15s, opacity .15s;
        }
        .celula-acoes a:first-child {
            background: #6c5ce7;
            color: #fff;
            box-shadow: 0 4px 12px rgba(108,92,231,.3);
        }
        .celula-acoes a:last-child {
            background:#6c5ce7;
            color: #fff;
            box-shadow: 0 4px 12px rgba(214,48,49,.3);
        }
        .celula-acoes a:hover { transform: translateY(-2px); }
 
        .texto-somente-visualizacao {
            font-size: .8rem;
            color: #b2bec3;
            font-style: italic;
        }
 
        /* ── Rodapé ── */
        .rodape-lista { margin-top: 28px; text-align: center; }
        .link-voltar-lista {
            color: #6c5ce7;
            font-weight: 800;
            font-size: .95rem;
            text-decoration: none;
            background: #fff;
            padding: 10px 26px;
            border-radius: 50px;
            box-shadow: 0 4px 16px rgba(255, 255, 255, 0.18);
            display: inline-block;
            transition: background .2s, color .2s;
        }
        .link-voltar-lista:hover { background: #6c5ce7; color: #fff; }
 
        @media (max-width: 600px) {
            .pagina-lista h2 { font-size: 1.4rem; }
            th, td { padding: 12px 14px; font-size: .85rem; }
        }
    </style>
</head>
<body>
    <nav class="navbar">
            <div class="logo">
                <span class="logo-icon"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></span>
                <span class="logo-text">PetCare</span>
            </div>

            <div class="links">
                <a href="../index.php">Início</a>
                <a href="../agendamentos.php">Agendamentos</a>
                <a href="avaliacoes/listar_avaliacoes.php" class="active">Avaliações</a>
                <a href="../galeria/listar_fotos.php">Galeria</a>
            </div>
        
         </nav>
 
    <nav class="navbar-aval">
        <a href="../index.php" class="logo-aval">
          
        </a>
        <a href="avaliacao_form.php" class="link-voltar-nav">+ Nova Avaliação</a>
    </nav>
 
    <div class="pagina-lista">
        <h2>Mural de Avaliações ⭐</h2>
 
        <?php if (isset($_GET['sucesso'])): ?>
            <div class="alerta">✅ Avaliação enviada com sucesso!</div>
        <?php endif; ?>
        <?php if (isset($_GET['editado'])): ?>
            <div class="alerta">✏️ Avaliação atualizada com sucesso!</div>
        <?php endif; ?>
        <?php if (isset($_GET['deletado'])): ?>
            <div class="alerta alerta-remover">🗑️ Avaliação removida.</div>
        <?php endif; ?>
 
        <div class="tabela-container">
            <table>
                <thead>
                    <tr>
                        <th>Pet</th>
                        <th>Nota</th>
                        <th>Comentário</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($avaliacoes as $av): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($av['pet_nome']); ?></td>
                        <td><?php echo str_repeat("⭐", $av['nota']); ?></td>
                        <td><?php echo htmlspecialchars($av['comentario']); ?></td>
                        <td>
                            <?php if (isset($_SESSION['usuario_id']) && $av['usuario_id'] == $_SESSION['usuario_id']): ?>
                                <div class="celula-acoes">
                                    <a href="avaliacao_editar_form.php?id=<?php echo $av['id']; ?>">Editar</a>
                                    <a href="processa_delete_avaliacao.php?id=<?php echo $av['id']; ?>"
                                       onclick="return confirm('Tem certeza que deseja apagar sua avaliação?');">Apagar</a>
                                </div>
                            <?php else: ?>
                                <span class="texto-somente-visualizacao">Apenas visualização</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
 
    <div class="rodape-lista">
        <a href="../agendamentos.php" class="link-voltar-lista">← Voltar para Agendamentos</a>
    </div>
 
</body>
</html>