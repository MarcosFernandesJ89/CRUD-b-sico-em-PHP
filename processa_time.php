<?php
include 'config.php';

$nome = $_POST['nome'];

$sql = "INSERT INTO times (nome) VALUES ('$nome')";

if ($conn->query($sql) === TRUE) {
    header('Location: cadastro_times.php');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
