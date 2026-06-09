<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body class="body-agendamentos">

        <nav class="navbar">
            <div class="logo">
                <span class="logo-icon"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm109-189q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm240 0q-29-29-29-71t29-71q29-29 71-29t71 29q29 29 29 71t-29 71q-29 29-71 29t-71-29Zm251 189q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg></span>
                <span class="logo-text">PetCare</span>
            </div>

            <div class="links">
                <a href="index.php">Início</a>
                <a href="agendamentos.php" class="active">Agendamentos</a>
                <a href="avaliacoes/listar_avaliacoes.php">Avaliações</a>
                <a href="galeria/listar_fotos.php">Galeria</a>
            </div>
        
         </nav>

        
         <div class="container-agendar"></div>
        
                
<div class="centraliza-agendamentos">
    <div class="wrapgay">

        <div class="card card-1">
            <div class="card-left">
                <div>
                    <div class="card-header">
                        <div class="icon-wrap">🛁</div>
                        <span class="card-title card-title-1">Banho</span>
                    </div>
                </div>
                <ul class="topicos">
                    <li>Banho completo com secagem</li>
                    <li>Hidratação profunda para pelos</li>
                    <li>Tratamento para pelos danificados</li>
                    <li>Banho medicamentoso</li>
                </ul>
                <a href="<?php echo isset($_SESSION['usuario_id']) ? 'banho/banho_form.php' : 'login/login.php'; ?>"><button class="btn-agendar-card btn-1">Agendar</button></a>
            </div>
            <div class="card-img-box" style="background:#c8f5e2;">
                <img src="imgs/cachorro_toalha.jpg" alt="Banho" width="200px" height="160px">
            </div>
        </div>

        <div class="card card-2">
            <div class="card-left">
                <div>
                    <div class="card-header">
                        <div class="icon-wrap">✂️</div>
                        <span class="card-title card-title-2">Tosa</span>
                    </div>
                </div>
                <ul class="topicos">
                    <li>Tosa higiênica</li>
                    <li>Tosa na tesoura</li>
                    <li>Acabamento com estilo</li>
                    <li>Corte de unhas incluso</li>
                </ul>
                <a href="<?php echo isset($_SESSION['usuario_id']) ? 'tosa/tosa_form.php' : 'login/login.php'; ?>"><button class="btn-agendar-card btn-2">Agendar</button></a>
            </div>
            <div class="card-img-box" style="background:#ffecc8;">
                <img src="imgs/cachorro_escova.jpg" alt="Tosa">
            </div>
        </div>
    </div>


    

    
</body>
</html>