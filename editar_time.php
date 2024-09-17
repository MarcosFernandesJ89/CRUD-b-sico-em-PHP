<?php
include 'config.php'; 

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID do time não fornecido.";
    exit;
}

$time_id = $_GET['id'];

$sql = "SELECT * FROM times WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $time_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Time não encontrado.";
    exit;
}

$time = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Time</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Editar Time</h1>
        </header>
        <main>
            <section class="form-section">
                <form action="processa_editar_time.php" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($time['id']); ?>">
                    <label for="nome">Nome do Time:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($time['nome']); ?>" required>
                    <button type="submit" class="button button-primary">Salvar Alterações</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
