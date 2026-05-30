<?php
require_once "conexao.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$tutor = $_POST['tutor'];
$descricao = $_POST['descricao'];

$stmt = $conn->prepare("UPDATE cadastrar SET nome = :nome, idade = :idade, especie = :especie, raca = :raca, tutor = :tutor, descricao = :descricao WHERE id = :id");
$stmt->execute([
    ':nome' => $nome,
    ':idade' => $idade,
    ':especie' => $especie,
    ':raca' => $raca,
    ':tutor' => $tutor,
    ':descricao' => $descricao,
    ':id' => $id
]);

header("Location: processa_listar_pet.php");
exit;


?>