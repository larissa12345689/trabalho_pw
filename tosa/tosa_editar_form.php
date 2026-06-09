<?php
require_once "../conexao.php";
 
$id = $_GET['id'];
 
$stmt = $conn->prepare('SELECT * FROM tosa WHERE id = :id');
$stmt->bindValue(':id', $id);
$stmt->execute();
 
$dados = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tosa</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* === EDITAR TOSA FORM === */
        .corpo-editar-tosa {
            background: linear-gradient(180deg, #8E8CD8 0%, #7a78c8 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
 
        .pagina-editar-tosa {
            background-color: #8E8CD8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 50vh;
            padding: 120px 20px 60px;
            position: relative;
            z-index: 2;
        }
 
        .caixa-editar-tosa {
            background-color: whitesmoke;
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
 
        .editar-tosa-icone {
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
 
        .editar-tosa-titulo {
            font-family: 'Nunito', sans-serif;
            font-size: 1.6rem;
            font-weight: 900;
            color: #3d3a6e;
            text-align: center;
            margin: 0;
        }
 
        .editar-tosa-subtitulo {
            font-family: 'Nunito', sans-serif;
            font-size: 0.88rem;
            color: #6b6898;
            text-align: center;
            margin: 0 0 10px;
        }
 
        .editar-tosa-formulario {
            font-family: 'Nunito', sans-serif;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-top: 8px;
        }
 
        .editar-tosa-grade {
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
 
        .campo-input:focus {
            border-color: #2ecc8e;
            box-shadow: 0 0 0 4px rgba(46, 204, 142, 0.12);
            background: #fff;
        }
 
        .btn-editar-tosa {
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
 
        .btn-editar-tosa:hover {
            background-color: #25b87d;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(46, 204, 142, 0.4);
        }
 
        .editar-tosa-rodape {
            margin-top: 8px;
            font-size: 0.85rem;
            color: #6b6898;
            font-weight: 600;
            text-align: center;
        }
 
        .link-voltar {
            font-family: 'Nunito', sans-serif;
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
<body class="corpo-editar-tosa">
 
    <div class="pagina-editar-tosa">
        <div class="caixa-editar-tosa">
 
            <div class="editar-tosa-icone">✂️</div>
            <h2 class="editar-tosa-titulo">Editar Tosa</h2>
            <p class="editar-tosa-subtitulo">Atualize os dados do agendamento</p>
 
            <form action="processa_editar_tosa.php" method="POST" class="editar-tosa-formulario">
                <div class="editar-tosa-grade">
 
                    <div class="campo-grupo">
                        <label class="campo-label">Nome do Pet</label>
                        <input type="text" name="nome" value="<?php echo htmlspecialchars($dados['nome']); ?>" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Espécie</label>
                        <input type="text" name="especie" value="<?php echo htmlspecialchars($dados['especie']); ?>" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Raça</label>
                        <input type="text" name="raca" value="<?php echo htmlspecialchars($dados['raca']); ?>" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Porte</label>
                        <input type="text" name="porte" value="<?php echo htmlspecialchars($dados['porte']); ?>" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Tutor</label>
                        <input type="text" name="tutor" value="<?php echo htmlspecialchars($dados['tutor']); ?>" class="campo-input" required>
                    </div>
 
                    <div class="campo-grupo">
                        <label class="campo-label">Idade</label>
                        <input type="text" name="idade" value="<?php echo htmlspecialchars($dados['idade']); ?>" class="campo-input" required>
                    </div>
 
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($dados['id']); ?>">
 
                </div>
 
                <button type="submit" class="btn-editar-tosa">Salvar Alterações ✂️</button>
            </form>
 
            <p class="editar-tosa-rodape">
                <a href="listar_tosa.php" class="link-voltar">← Voltar para lista de tosas</a>
            </p>
 
        </div>
    </div>
 
</body>
</html>