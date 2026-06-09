<?php
session_start();
require_once "../conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $porte = $_POST['porte'];
    $tutor = $_POST['tutor'];
    $idade = $_POST['idade'];

    $stmt = $conn->prepare('UPDATE banho SET nome = :nome, especie = :especie, raca = :raca, porte = :porte, tutor = :tutor, idade = :idade WHERE id = :id AND usuario_id = :usuario_id'); //tem no banco usuario_id
    
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':especie', $especie);
    $stmt->bindParam(':raca', $raca);
    $stmt->bindParam(':porte', $porte);
    $stmt->bindParam(':tutor', $tutor);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam('usuario_id',$_SESSION['usuario_id']);
    $stmt->execute();

    header("Location: listar_banho.php?editado=1");
    exit();
    
}










?>