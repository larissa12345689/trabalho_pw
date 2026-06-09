<?php
session_start();
require_once "../conexao.php";

$id = $_GET['id'];

$stmt = $conn->prepare("
    SELECT *
    FROM galeria_pet
    WHERE id = :id
    AND usuario_id = :usuario_id
");

$stmt->bindValue(':id', $id);
$stmt->bindValue(':usuario_id', $_SESSION['usuario_id']);
$stmt->execute();

$foto = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$foto){
    die("Acesso negado");
}

unlink($foto['foto']);

$stmt = $conn->prepare("
    DELETE FROM galeria_pet
    WHERE id = :id
");

$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: listar_fotos.php?apagado=1");