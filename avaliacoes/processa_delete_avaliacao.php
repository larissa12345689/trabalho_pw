<?php
session_start();
require_once '../conexao.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID inválido para exclusão.");
}

$id = $_GET['id'];

// COMANDO DELETE COM TRAVA ABSOLUTA NO WHERE
$stmt = $conn->prepare('DELETE FROM avaliacoes WHERE id = :id AND usuario_id = :usuario_id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':usuario_id', $_SESSION['usuario_id'], PDO::PARAM_INT);

if ($stmt->execute()) {
    header("Location: listar_avaliacoes.php?deletado=1");
    exit();
} else {
    echo "Erro ao tentar apagar a avaliação.";
}
?>