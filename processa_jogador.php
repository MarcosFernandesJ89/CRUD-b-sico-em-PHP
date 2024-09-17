<?php
include 'config.php';

$nome = $_POST['nome'];
$time_id = $_POST['time_id'];

$sql = "INSERT INTO jogadores (nome, time_id) VALUES ('$nome', '$time_id')";

if ($conn->query($sql) === TRUE) {
    header('Location: cadastro_jogadores.php');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
