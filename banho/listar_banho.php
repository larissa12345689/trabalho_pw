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
    <title>Lista de Banhos</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        .corpo-lista-banho {
            background: linear-gradient(180deg, #8E8CD8 0%, #7a78c8 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
 
        .pagina-lista-banho {
            padding: 40px 60px;
            max-width: 1100px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            
        }
 
        .patinha-banho {
            position: absolute;
            z-index: 1;
            opacity: 0.35;
            pointer-events: none;
        }
 
        .lista-cabecalho-banho {
            display: flex;
            align-items: center;
           justify-content: center;
        }
 
 
        .lista-titulo-banho {
            font-family: 'Nunito', sans-serif;
            font-size: 1.8rem;
            font-weight: 900;
            color: #fff;
            text-align: center;
            margin: 0 0 28px;

        }
 
 
        .container-alerta-sucesso-banho {
            display: flex;
            justify-content: center;
        }
 
        .alerta-sucesso-banho {
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
 
        .tabela-container-banho {
            width: 100%;
            max-width: 900px;
            background-color: whitesmoke;
            border-radius: 28px;
            padding: 32px 28px;
            box-shadow: 0 24px 60px rgba(60, 56, 120, 0.25);
            overflow-x: auto;
        }

        .tabela-lista-banho {
            width: 100%;
            border-collapse: collapse;
            font-family: 'Nunito', sans-serif;
        }

        .tabela-lista-banho th {
            font-size: 0.82rem;
            font-weight: 800;
            color: #3d3a6e;
            text-align: left;
            padding: 10px 14px;
            border-bottom: 2px solid #e0dff5;
            white-space: nowrap;
        }

        .tabela-lista-banho td {
            font-size: 0.9rem;
            font-weight: 600;
            color: #3d3a6e;
            padding: 12px 14px;
            border-bottom: 1px solid #eeecfc;
        }

        .tabela-lista-banho tr:last-child td {
            border-bottom: none;
        }

        .tabela-lista-banho tr:hover td {
            background-color: #f3f2fc;
        }

        .celula-acoes-banho {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .celula-acoes-banho a {
            font-family: 'Nunito', sans-serif;
            font-size: 0.82rem;
            font-weight: 800;
            text-decoration: none;
            padding: 5px 14px;
            border-radius: 20px;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .celula-acoes-banho a:first-child {
            background-color: #f0eeff;
            color: #8E8CD8;
        }

        .celula-acoes-banho a:first-child:hover {
            background-color: #8E8CD8;
            color: #fff;
            transform: translateY(-1px);
        }

        .celula-acoes-banho a:last-child {
            background-color: #fdecea;
            color: #e74c3c;
        }

        .celula-acoes-banho a:last-child:hover {
            background-color: #e74c3c;
            color: #fff;
            transform: translateY(-1px);
        }

        .texto-somente-visualizacao-banho {
            font-family: 'Nunito', sans-serif;
            font-size: 0.82rem;
            font-weight: 700;
            color: #b0aed0;
        }
 
        .rodape-lista-banho {
            margin-top: 28px;
            text-align: center;
            padding-bottom: 40px;
        }
 
        .link-voltar-lista-banho {
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
 
        .link-voltar-lista-banho:hover {
            color: #ff9f43;
        }
    </style>
</head>
<body class="corpo-lista-banho">
 
    <div class="pagina-lista-banho">
 
        <div class="lista-cabecalho-banho">
                <h1 class="lista-titulo-banho">Agendamentos de Banho  🛁</h1>
        </div>
    </div>
    
 
    <?php if (isset($_GET['sucesso'])): ?>
        <div class="container-alerta-sucesso-banho">
            <div class="alerta-sucesso-banho">
                ✅ Cadastro realizado com sucesso, entraremos em contato!
            </div>
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['apagado'])): ?>
        <div class="container-alerta-sucesso-banho">
            <div class="alerta-sucesso-banho">
                ✅ Agendamento apagado com sucesso!
            </div>
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['editado'])): ?>
        <div class="container-alerta-sucesso-banho">
            <div class="alerta-sucesso-banho">
                ✅ Agendamento editado com sucesso!
            </div>
        </div>
    <?php endif; ?>
 
    <div class="pagina-lista-banho" style="display:flex; flex-direction:column; align-items:center; padding-top: 0;">
    <div class="tabela-container-banho">
        <table class="tabela-lista-banho">
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Porte</th>
                <th>Tutor</th>
                <th>Idade</th>
                <th>Ações</th>
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
                            <div class="celula-acoes-banho">
                                <a href="editar_form.php?id=<?php echo $a['id']; ?>">Editar</a>
                                <a href="processa_delete.php?id=<?php echo $a['id']; ?>" onclick="return confirm('Tem certeza que deseja apagar este agendamento?');">Apagar</a>
                            </div>
                        <?php else: ?>
                            <span class="texto-somente-visualizacao-banho">Apenas visualização</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
 
    <div class="rodape-lista-banho">
        <a href="../agendamentos.php" class="link-voltar-lista-banho">← Voltar para agendamentos</a>
    </div>
 
</body>
</html>