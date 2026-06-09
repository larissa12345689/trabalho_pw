<?php
require_once 'conexao2.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha_limpa = $_POST['senha'];

    $senha_criptografada = password_hash($senha_limpa, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (usuario, email, senha) VALUES (:usuario, :email, :senha)");
    
    $stmt->bindValue(':usuario', $usuario);
    $stmt->bindValue(':email', $email);

    $stmt->bindValue(':senha', $senha_criptografada);

    if ($stmt->execute()) {

        header("Location: login.php?sucesso=1");
        exit;
    } else {
        echo "Erro ao realizar o cadastro.";
    }
}
?>