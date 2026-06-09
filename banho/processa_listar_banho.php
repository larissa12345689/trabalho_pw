<?php
require_once "../conexao.php";

$stmt = $conn->prepare("SELECT * FROM banho");
$stmt->execute();

$agendamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);                         

?>