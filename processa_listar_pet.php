<?php
require_once "conexao.php";

$stmt = $conn->query("SELECT * FROM cadastrar");
$pets = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach($pets as $pet){ ?>

        <p><img src="uploads/<?php echo $pet['foto']; ?>" width="150"></p>
        <?php echo $pet["nome"]; ?>
        <p>Idade: <?php echo $pet['idade']; ?></p>
        <p>Espécie: <?php echo $pet['especie']; ?></p>
        <p>Raça: <?php echo $pet['raca']; ?></p>
        <p>Tutor: <?php echo $pet['tutor']; ?></p>
        <p>descrição: <?php echo $pet['descricao']; ?></p>
        <a href="processa_delete.php?id=<?php echo $pet['id']; ?>"onclick="return confirm('Deseja realmente excluir este pet?')">Excluir</a>
        <a href="editar_pet.php?id=<?php echo $pet['id']; ?>">Editar</a>
        
        <?php } ?>
    
</body>
</html>