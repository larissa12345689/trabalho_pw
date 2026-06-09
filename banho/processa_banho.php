<?php
session_start();
require_once "../conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $porte = $_POST['porte'];
    $tutor = $_POST['tutor'];
    $idade = $_POST['idade'];

    $stmt = $conn->prepare("INSERT INTO banho (nome, especie, raca, porte, tutor, idade, usuario_id) VALUES (:nome, :especie, :raca, :porte, :tutor, :idade, :usuario_id)");
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':especie', $especie);
    $stmt->bindParam(':raca', $raca);
    $stmt->bindParam(':porte', $porte);
    $stmt->bindParam(':tutor', $tutor);
    $stmt->bindParam(':idade', $idade);

    $stmt->bindParam(':usuario_id', $_SESSION['usuario_id']);

    if($stmt->execute()){
        header("Location: listar_banho.php?sucesso=1");
        exit();
    }
}
?>