<?php
include 'config.php'; 


if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID do time não fornecido.";
    exit;
}

$time_id = $_GET['id'];

$sql = "SELECT * FROM jogadores WHERE time_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $time_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Não é possível excluir um time com jogadores associados.";
} else {
    $sql = "DELETE FROM times WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $time_id);

    if ($stmt->execute()) {
        header('Location: cadastro_times.php');
        exit;
    } else {
        echo "Erro ao excluir o time: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
