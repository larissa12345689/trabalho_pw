<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        if (isset($_SESSION['mensagem'])) {
            echo "<p>" . $_SESSION['mensagem'] . "</p>";
            unset($_SESSION['mensagem']);
        }
    ?>

    <!-- <a href="cadastro.php">Cadastrar</a><br>
    <a href="processa_listar_pet.php">Listar</a><br>
    <a href="processa_listar_pet.php">Deletar</a><br>
    <a href="processa_listar_pet.php">Atualizar</a><br> -->

</body>
</html> 