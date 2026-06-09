<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banho</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800;900&display=swap" rel="stylesheet">
    <style>
        .corpo-banho {
            background: linear-gradient(180deg, #8E8CD8 0%, #7a78c8 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
 
        .pagina-banho {
            background-color:#8E8CD8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 50vh;
            padding: 120px 20px 60px;
            position: relative;
            z-index: 2;
        }
 
        .caixa-banho {
            background-color:whitesmoke;
            border-radius: 28px;
            padding: 44px 40px;
            width: 100%;
            max-width: 520px;
            box-shadow: 0 24px 60px rgba(60, 56, 120, 0.25);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
        }
 
        .banho-icone {
            font-size: 2.5rem;
            background: #e6f9f0;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 6px;
        }
 
        .banho-titulo {
            font-family: 'nunito';
            font-size: 1.6rem;
            font-weight: 900;
            color: #3d3a6e;
            text-align: center;
            margin: 0;
        }
 
        .banho-subtitulo {
            font-family: 'nunito';
            font-size: 0.88rem;
            color: #6b6898;
            text-align: center;
            margin: 0 0 10px;
        }
 
        .banho-formulario {
            font-family: 'nunito';
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-top: 8px;
        }
 
        .banho-grade {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }
 
        .campo-grupo {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
 
        .campo-grupo.largura-total {
            grid-column: 1 / -1;
        }
 
        .campo-label {
            font-size: 0.82rem;
            font-weight: 800;
            color: #3d3a6e;
        }
 
        .campo-input {
            padding: 11px 14px;
            border-radius: 14px;
            border: 2px solid #e0dff5;
            font-family: 'Nunito', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            color: #3d3a6e;
            outline: none;
            background: #fafafa;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            width: 100%;
        }
 
        .campo-input::placeholder {
            color: #b0aed0;
            font-weight: 500;
        }
 
        .campo-input:focus { /*deixa bonitinho o campo quando ele é clicado*/
            border-color: #2ecc8e;
            box-shadow: 0 0 0 4px rgba(46, 204, 142, 0.12);
            background: #fff;
        }
 
        .btn-banho {
            width: 100%;
            padding: 13px;
            background-color: #2ecc8e;
            color: #fff;
            border: none;
            border-radius: 25px;
            font-family: 'Nunito', sans-serif;
            font-size: 0.95rem;
            font-weight: 800;
            cursor: pointer;
            margin-top: 4px;
            transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 6px 20px rgba(46, 204, 142, 0.35);
        }
 
        .btn-banho:hover {
            background-color: #25b87d;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(46, 204, 142, 0.4);
        }
 
        .banho-rodape {
            margin-top: 8px;
            font-size: 0.85rem;
            color: #6b6898;
            font-weight: 600;
            text-align: center;
        }
 
        .link-voltar {
            font-family: 'nunito';
            color: #8E8CD8;
            font-weight: 800;
            text-decoration: none;
            transition: color 0.2s ease;
        }
 
        .link-voltar:hover {
            color: #ff9f43;
        }
    </style>
</head>
<body>
    
    <div class="pagina-banho">
        <div class="caixa-banho">
 
            <div class="banho-icone">🛁</div>
            <h2 class="banho-titulo">Agendar Banho</h2>
            <p class="banho-subtitulo">Preencha os dados do seu pet para agendar</p>
 
            <form action="processa_banho.php" method="POST" class="banho-formulario">
                <div class="banho-grade">
 
                    <div class="campo-grupo">
                        <label class="campo-label">Nome do Pet</label>
                        <input type="text" name="nome" placeholder="Ex: Rex" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Espécie</label>
                        <input type="text" name="especie" placeholder="Ex: Cachorro" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Raça</label>
                        <input type="text" name="raca" placeholder="Ex: Labrador" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Porte</label>
                        <input type="text" name="porte" placeholder="Ex: Médio" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Tutor</label>
                        <input type="text" name="tutor" placeholder="Seu nome" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Idade</label>
                        <input type="text" name="idade" placeholder="Ex: 3 anos" class="campo-input" required>
                    </div>
 
                </div>
 
                <button type="submit" class="btn-banho">Agendar Banho 🛁</button>
            </form>
 
            <p class="banho-rodape">
                <a href="../agendamentos.php" class="link-voltar">← Voltar para agendamentos</a>
            </p>
 
        </div>
    </div>


</body>
</html>