<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM jogadores WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: cadastro_jogadores.php');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
