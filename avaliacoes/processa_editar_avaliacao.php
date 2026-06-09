<?php
session_start();
require_once "../conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $pet_nome = $_POST['pet_nome'];
    $nota = $_POST['nota'];
    $comentario = $_POST['comentario'];

    // TRAVA DUPLA NO WHERE: id correspondente E o usuario_id tem que ser o da sessão ativa!
    $stmt = $conn->prepare('UPDATE avaliacoes SET pet_nome = :pet_nome, nota = :nota, comentario = :comentario WHERE id = :id AND usuario_id = :usuario_id');
    
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':pet_nome', $pet_nome);
    $stmt->bindParam(':nota', $nota);
    $stmt->bindParam(':comentario', $comentario);
    $stmt->bindParam(':usuario_id', $_SESSION['usuario_id']);
    
    if($stmt->execute()){
        header("Location: listar_avaliacoes.php?editado=1");
        exit();
    } else {
        echo "Erro ao atualizar a avaliação.";
    }
}
?>