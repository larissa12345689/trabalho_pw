<?php
session_start();
require_once '../conexao.php';

$id = $_GET['id'];

$stmt = $conn->prepare('DELETE FROM tosa WHERE id = :id AND usuario_id = :usuario_id');
$stmt->bindValue(':id', $id);
$stmt->bindValue(':usuario_id', $_SESSION['usuario_id']);

$stmt->execute();

header("Location: listar_tosa.php?apagado=1");
exit();
?>