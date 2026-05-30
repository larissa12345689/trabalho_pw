<?php
require_once "conexao.php";

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM cadastrar WHERE id = :id");

$stmt->bindValue(':id', $id);
$stmt->execute();

$pet = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Pet</title>
</head>
<body>

<form action="processa_edicao.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $pet['id']; ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $pet['nome']; ?>">

    <br><br>

    <label>Idade:</label>
    <input type="text" name="idade" value="<?php echo $pet['idade']; ?>">

    <br><br>

    <label>Espécie:</label>
    <input type="text" name="especie" value="<?php echo $pet['especie']; ?>">

    <br><br>

    <label>Raça:</label>
    <input type="text" name="raca" value="<?php echo $pet['raca']; ?>">

    <br><br>

    <label>Tutor:</label>
    <input type="text" name="tutor" value="<?php echo $pet['tutor']; ?>">

    <br><br>

    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?php echo $pet['descricao']; ?>">

    <br><br>

    <button type="submit">Salvar</button>

</form>

</body>
</html>


