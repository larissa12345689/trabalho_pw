<?php
session_start();
require_once "../conexao.php";

$id = $_POST['id'];
$nome_pet = $_POST['nome_pet'];

$stmt = $conn->prepare("
    UPDATE galeria_pet
    SET nome_pet = :nome_pet
    WHERE id = :id
    AND usuario_id = :usuario_id
");

$stmt->bindValue(':nome_pet', $nome_pet);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':usuario_id', $_SESSION['usuario_id']);

$stmt->execute();

header("Location: listar_fotos.php?editado=1");
exit;