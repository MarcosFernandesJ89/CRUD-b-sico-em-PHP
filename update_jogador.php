<?php
include 'config.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$time_id = $_POST['time_id'];

$sql = "UPDATE jogadores SET nome = '$nome', time_id = $time_id WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: cadastro_jogadores.php');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
