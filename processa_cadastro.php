<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $especie = $_POST["especie"];
    $raca = $_POST["raca"];
    $tutor = $_POST["tutor"];
    $descricao = $_POST["descricao"];


    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {  
        $arquivo = $_FILES['foto'];
        $partes = explode('.', $arquivo['name']);
        $extensao = strtolower(end($partes));
        $extesoes_permitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (!in_array($extensao, $extesoes_permitidas)) {
            die("Tipo de arquivo não permitido. Envie apenas imagens.");
        }

        $novo_nome_arquivo = uniqid() . "." . $extensao;
        $pasta_destino = "uploads/";
        $caminho_final = $pasta_destino . $novo_nome_arquivo;  //vai ficar tipo uploads/65f3a1b2c4e5d.jpg
        
        if (move_uploaded_file($arquivo['tmp_name'], $caminho_final)) {        
            $stmt = $conn->prepare("INSERT INTO cadastrar (foto, nome, idade, especie, raca, tutor, descricao) VALUES (:foto, :nome, :idade, :especie, :raca, :tutor, :descricao)");
            $stmt->execute([
                ':foto' => $novo_nome_arquivo,
                ':nome' => $nome,
                ':idade' => $idade,
                ':especie' => $especie,
                ':raca' => $raca,
                ':tutor' => $tutor,
                ':descricao' => $descricao
            ]);   
            session_start();
            $_SESSION['mensagem'] = "pet cadastrado com sucesso";
            header("Location: index.php"); 
            exit;
                                    
        } else {
            echo "Erro ao mover o arquivo para a pasta de destino.";
        }
        
    } else {
        echo "Erro no envio do arquivo.";
    }
}









?>