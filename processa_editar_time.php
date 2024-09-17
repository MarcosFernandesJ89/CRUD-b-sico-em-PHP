<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $sql = "UPDATE times SET nome = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $nome, $id);
    
    if ($stmt->execute()) {
        echo "Time atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar o time: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: cadastro_times.php");
    exit;
} else {
    echo "Método de solicitação inválido.";
}
