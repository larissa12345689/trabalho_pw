
<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.php");
    exit();
}
 
$stmt = $conn->prepare("SELECT * FROM tosa");
$stmt->execute();
 
$agendamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 