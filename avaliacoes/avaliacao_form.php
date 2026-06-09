

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deixar Avaliação - PetCare</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { 
            box-sizing: border-box;
            margin: 0;
            padding: 0; 
        }
 
        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 16px 60px;
            background: #918fde;
                
             
        }
 
        /* ── Navbar ── */
        .navbar-aval {
            width: 100%;
            max-width: 620px;
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
        .logo-aval svg { fill: #ffffff; }
        .link-voltar-nav {
            font-size: .88rem;
            font-weight: 700;
            color: #6c5ce7;
            text-decoration: none;
            background: #fff;
            padding: 8px 18px;
            border-radius: 50px;
            box-shadow: 0 4px 16px rgba(255, 255, 255, 0.18);
            transition: background .2s, color .2s;
        }
        .link-voltar-nav:hover { background: #6c5ce7; color: #fff; }
 
        /* ── Caixa ── */
        .caixa-banho {
            background: #fff;
            border-radius: 28px;
            box-shadow: 0 8px 32px rgba(30, 0, 255, 0.18);
            padding: 48px 44px 40px;
            width: 100%;
            max-width: 620px;
            position: relative;
            overflow: hidden;
        }
        .caixa-banho::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 6px;
            background: #6c5ce7;
        }
        .caixa-banho h2 {
            font-size: 1.7rem;
            font-weight: 900;
            color: #7270ab;
            margin-bottom: 28px;
            text-align: center;
        }
 
        /* ── Grade de campos ── */
        .banho-grade {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 28px;
        }
        .campo-grupo { display: flex; flex-direction: column; gap: 6px; }
        .campo-label {
            font-size: .78rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .07em;
            color: #6d6ba7;
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
            border-color: #6c5ce7;
            box-shadow: 0 0 0 4px rgba(108,92,231,.12);
        }
 
        /* ── Botão ── */
        .btn-banho {
            display: block;
            width: 100%;
            padding: 14px;
            background: #918fde;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            font-weight: 800;
            border: none;
            border-radius: 14px;
            cursor: pointer;
            letter-spacing: .04em;
            box-shadow: 0 6px 20px rgba(108,92,231,.35);
            transition: transform .15s, box-shadow .15s;
        }
        .btn-banho:hover  { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(124, 115, 189, 0.4); }
        .btn-banho:active { transform: translateY(0); }
 
        @media (max-width: 540px) {
            .caixa-banho { padding: 36px 22px 28px; }
            .banho-grade { grid-template-columns: 1fr; }
            .caixa-banho h2 { font-size: 1.35rem; }
        }
    </style>
</head>
<body>
 
    <nav class="navbar-aval">
        <a href="../index.php" class="logo-aval">
            <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960" width="22px"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg>
            PetCare
        </a>
        <a href="../agendamentos.php" class="link-voltar-nav">← Voltar</a>
    </nav>
 
    <div class="caixa-banho">
        <h2>Deixar Avaliação ⭐</h2>
        <form action="processa_avaliacao.php" method="POST">
            <div class="banho-grade">
                <div class="campo-grupo">
                    <label class="campo-label">Nome do Pet</label>
                    <input type="text" name="pet_nome" placeholder="Ex: Thor" class="campo-input" required>
                </div>
                <div class="campo-grupo">
                    <label class="campo-label">Nota (1 a 5)</label>
                    <select name="nota" class="campo-input" required>
                        <option value="5">⭐⭐⭐⭐⭐ Excelente</option>
                        <option value="4">⭐⭐⭐⭐ Muito Bom</option>
                        <option value="3">⭐⭐⭐ Bom</option>
                        <option value="2">⭐⭐ Regular</option>
                        <option value="1">⭐ Ruim</option>
                    </select>
                </div>
                <div class="campo-grupo" style="grid-column: span 2;">
                    <label class="campo-label">Seu Comentário</label>
                    <textarea name="comentario" placeholder="Conte como foi a experiência do seu pet..." class="campo-input" rows="4" required style="resize:vertical;"></textarea>
                </div>
            </div>
            <button type="submit" class="btn-banho">Enviar Avaliação ✨</button>
        </form>
    </div>
 
</body>
</html>