<?php
session_start();
require_once "../conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_pet = $_POST['nome_pet'];
    $usuario_id = $_SESSION['usuario_id'];

    if (!isset($_FILES['foto']) || $_FILES['foto']['error'] != 0) {
        die("Erro ao enviar a imagem.");
    }

    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'webp'];

    $extensao = strtolower(
        pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION)
    );

    if (!in_array($extensao, $extensoesPermitidas)) {
        die("Formato não permitido.");
    }

    $mime = mime_content_type($_FILES['foto']['tmp_name']);

    $tiposPermitidos = [
        'image/jpeg',
        'image/png',
        'image/webp'
    ];

    if (!in_array($mime, $tiposPermitidos)) {
        die("O arquivo enviado não é uma imagem válida.");
    }

    $limite = 5 * 1024 * 1024;

    if ($_FILES['foto']['size'] > $limite) {
        die("A imagem deve ter no máximo 5MB.");
    }

    $novoNome = uniqid() . "." . $extensao;

    $caminho = "uploads/" . $novoNome;

    if (!move_uploaded_file(
        $_FILES['foto']['tmp_name'],
        $caminho
    )) {
        die("Erro ao salvar imagem.");
    }

    $stmt = $conn->prepare("
        INSERT INTO galeria_pet
        (nome_pet, foto, usuario_id)
        VALUES
        (:nome_pet, :foto, :usuario_id)
    ");

    $stmt->bindValue(':nome_pet', $nome_pet);
    $stmt->bindValue(':foto', $caminho);
    $stmt->bindValue(':usuario_id', $usuario_id);

    $stmt->execute();

    header("Location: listar_fotos.php?sucesso=1");
    exit;
}