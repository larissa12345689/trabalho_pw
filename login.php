<?php
require_once 'conexao.php';

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conexao->prepare("SELECT * FROM users WHERE usuario = :usuario AND email = :email");
    $stmt->bindValue('usuario', $usuario);
    $stmt->bindValue('email', $email);
    $stmt->execute();

    $dados = $stmt->fetch();
    
    if ($dados && $senha == $dados['senha']){
        echo "logado";
    } else {
        echo "usuario nao encontrado";
    }

    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="usuario" required>
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="senha" placeholder="senha" required>

        <button type="submit">Enviar</button>
        
    </form>
</body>
</html>
