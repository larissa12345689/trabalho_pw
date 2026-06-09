<?php
require_once "../conexao.php";

$stmt = $conn->prepare("SELECT * FROM avaliacoes ORDER BY data_avaliacao DESC");
$stmt->execute();

$avaliacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);                         
?>

