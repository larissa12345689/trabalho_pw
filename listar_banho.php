<?php 
session_start();
require_once "../conexao.php";
require_once "processa_listar_banho.php"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800;900&display=swap" rel="stylesheet">
    <style>
        /* === LISTAR BANHO === */
        .corpo-lista {
            background: linear-gradient(180deg, #8E8CD8 0%, #7a78c8 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
 
        .pagina-lista {
            padding: 120px 40px 60px;
            max-width: 1100px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .patinha {
            position: absolute;
            z-index: 1;
            opacity: 0.35; /* Deixa suave igual ao Canva */
            pointer-events: none; /* Garante que não vai atrapalhar cliques em botões */
        }

        .patinha-1 {
            top: 40px;
            left: 5%;
            transform: rotate(-15deg);
        }

        .patinha-2 {
            top: 30px;
            left: 48%;
            transform: rotate(10deg);
        }

        .patinha-3 {
            top: 40px;
            right: 1%;
            transform: rotate(25deg);
        }

        .patinha-4 {
            bottom: 50px;
            left: -60px;
            transform: rotate(-35deg);
        }

        .patinha-5 {
            bottom: 20px;
            left: 45%;
            transform: rotate(-5deg);
        }

        .patinha-6 {
            top: 160px;
            right: 22%;
            transform: rotate(15deg);
        }

        .patinha-7 {
            bottom: 50px;
            right: 2%;
            transform: rotate(40deg);
        }
 
        .lista-cabecalho {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
            flex-wrap: wrap;
            gap: 16px;
        }
 
        .lista-titulo-grupo {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
 
        .lista-titulo {
            font-family: 'nunito', sans-serif;
            font-size: 3rem;
            font-weight: 900;
            color: #ffffff;
            margin: 0;
        }
 
        .lista-subtitulo {
            font-family: 'nunito', sans-serif;
            font-size: 1.5rem;
            color: rgba(255,255,255,0.75);
            font-weight: 600;
        }
 
        .btn-novo-agendamento {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #2ecc8e;
            color: #fff;
            padding: 12px 24px;
            border-radius: 25px;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.95rem;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
            box-shadow: 0 6px 20px rgba(46, 204, 142, 0.35);
        }
 
        .btn-novo-agendamento:hover {
            background: #25b87d;
            transform: translateY(-2px);
        }

        .container-alerta-sucesso{
            display: flex;
            justify-content: center;
        }
 
        .alerta-sucesso {
            width: 30%;
            background: #e6f9f0;
            color: #1a7a52;
            border-radius: 14px;
            padding: 14px 20px;
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .tabela-container {
            margin-top: 40px;
            margin-left: 150px;
            width: 80%;
            height: auto;
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 24px 60px rgba(60, 56, 120, 0.2);
            overflow: hidden; /*corta*/
        }
 
        .tabela-lista {
            width: 100%;
            border-collapse: collapse;
            font-family: 'Nunito', sans-serif;
        }
 
        .tabela-lista thead {
            background: linear-gradient(90deg, #8E8CD8, #7a78c8);
        }
 
        .tabela-lista thead th {
            padding: 16px 20px;
            text-align: left;
            color: #fff;
            font-weight: 800;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
 
        .tabela-lista tbody tr {
            border-bottom: 1px solid #f0eeff;
            transition: background 0.2s ease;
        }
 
        .tabela-lista tbody tr:last-child {
            border-bottom: none;
        }
 
        .tabela-lista tbody tr:hover {
            background: #fafafe;
        }
 
        .tabela-lista tbody td {
            padding: 14px 20px;
            color: #3d3a6e;
            font-weight: 600;
            font-size: 0.92rem;
        }
 
        .celula-acoes {
            display: flex;
            gap: 8px;
            align-items: center;
        }
 
        .btn-editar {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: #f0eeff;
            color: #8E8CD8;
            padding: 7px 14px;
            border-radius: 20px;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.82rem;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
        }
 
        .btn-editar:hover {
            background: #8E8CD8;
            color: #fff;
            transform: translateY(-1px);
        }
 
        .btn-apagar {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: #fce4f0;
            color: #a0186a;
            padding: 7px 14px;
            border-radius: 20px;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.82rem;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
        }
 
        .btn-apagar:hover {
            background: #e0569a;
            color: #fff;
            transform: translateY(-1px);
        }
 
        .texto-somente-visualizacao {
            color: #b0aed0;
            font-size: 0.82rem;
            font-weight: 600;
            font-style: italic;
        }
 
        .rodape-lista {
            margin-top: 28px;
            text-align: center;
            
        }
 
        .link-voltar-lista {
            font-family: 'nunito', 'sans serrif';
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: rgba(255,255,255,0.85);
            font-weight: 800;
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.2s ease;
        }
 
        .link-voltar-lista:hover {
            color: #ff9f43;
        }
    </style>
</head>
<body class="corpo-lista">


    <div class="pagina-lista">

    <div class="patinha patinha-1"><svg xmlns="http://www.w3.org/2000/svg" height="55px" viewBox="0 -960 960 960" width="55px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></div>
    <div class="patinha patinha-2"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></div>
    <div class="patinha patinha-3"><svg xmlns="http://www.w3.org/2000/svg" height="45px" viewBox="0 -960 960 960" width="45px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></div>
    <div class="patinha patinha-4"><svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></div>
    <div class="patinha patinha-5"><svg xmlns="http://www.w3.org/2000/svg" height="42px" viewBox="0 -960 960 960" width="42px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></div>
    <div class="patinha patinha-6"><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></div>
    <div class="patinha patinha-7"><svg xmlns="http://www.w3.org/2000/svg" height="52px" viewBox="0 -960 960 960" width="52px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></div>
        
    <div class="lista-cabecalho">
            <div class="lista-titulo-grupo">
                <h1 class="lista-titulo">Agendamentos de Banho</h1>
                <p class="lista-subtitulo">Veja e gerencie seus agendamentos</p>
            </div>
            <a href="banho_form.php" class="btn-novo-agendamento">+ Novo Agendamento</a>
        </div>
    </div>

    <?php if (isset($_GET['sucesso'])): ?>
        <div class="container-alerta-sucesso">
            <div class="alerta-sucesso">
                    ✅ Cadastro realizado com sucesso!
            </div>
        </div>
    <?php endif; ?>

    <div class="container-tabela-conteiner">
        <div class="tabela-container">
            <table class="tabela-lista">
                <tr>
                    <th>nome</th>
                    <th>especie</th>
                    <th>raça</th>
                    <th>porte</th>
                    <th>tutor</th>
                    <th>idade</th>
                    <th>ações</th>
                </tr>
            <?php foreach($agendamentos as $a){ ?>
                <tr>
                    <td><?php echo htmlspecialchars($a['nome']); ?></td>
                    <td><?php echo htmlspecialchars($a['especie']); ?></td>
                    <td><?php echo htmlspecialchars($a['raca']); ?></td>
                    <td><?php echo htmlspecialchars($a['porte']); ?></td>
                    <td><?php echo htmlspecialchars($a['tutor']); ?></td>
                    <td><?php echo htmlspecialchars($a['idade']); ?></td>
                    <td>

                        <?php if ($a['usuario_id'] == $_SESSION['usuario_id']): ?>
                        <div class="celula-acoes">
                            
                            <a href="editar_form.php?id=<?php echo $a['id']; ?>">Editar</a>
                            <a href="processa_delete.php?id=<?php echo $a['id']; ?>">Apagar</a>
                            
                        </div>

                        <?php else: ?>
                            <span class="texto-somente-visualizacao">Apenas visualização</span>
                        <?php endif; ?>
                    </td>
                    
                </tr>
            <?php }?>

            </table>
        </div>
    </div>
        <div class="rodape-lista">
            <a href="../agendamentos.php" class="link-voltar-lista">← Voltar para agendamentos</a>
        </div>
    

</body>
</html>



