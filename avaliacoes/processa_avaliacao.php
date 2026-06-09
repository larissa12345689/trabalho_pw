<?php
session_start();
require_once "../conexao.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pet_nome = $_POST['pet_nome'];
    $nota = $_POST['nota'];
    $comentario = $_POST['comentario'];

    
    $stmt = $conn->prepare("INSERT INTO avaliacoes (pet_nome, nota, comentario, usuario_id) VALUES (:pet_nome, :nota, :comentario, :usuario_id)");
    
    $stmt->bindParam(':pet_nome', $pet_nome);
    $stmt->bindParam(':nota', $nota);
    $stmt->bindParam(':comentario', $comentario);
    $stmt->bindParam(':usuario_id', $_SESSION['usuario_id']);

    if($stmt->execute()){
        header("Location: listar_avaliacoes.php?sucesso=1");
        exit();
    } else {
        echo "Erro ao registrar a avaliação.";
    }
}
?>