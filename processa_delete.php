<?php
require_once "conexao.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM cadastrar WHERE id = :id");

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    header("Location: processa_listar_pet.php");
    exit;
}











?>