<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Editar Jogador</h1>
        </header>
        <main>
            <?php
            include 'config.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM jogadores WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $jogador = $result->fetch_assoc();
            ?>
            <form action="update_jogador.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($jogador['id']); ?>">
                <div class="form-group">
                    <label for="nome">Nome do Jogador:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($jogador['nome']); ?>" required>
                </div>
				</br>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <select id="time" name="time_id" required>
                        <?php
                        $sql = "SELECT * FROM times";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $selected = ($row['id'] == $jogador['time_id']) ? "selected" : "";
                                echo "<option value='{$row['id']}' $selected>{$row['nome']}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
				</br>
                <button type="submit" class="button button-primary">Salvar</button>
            </form>
        </main>
    </div>
</body>
</html>
